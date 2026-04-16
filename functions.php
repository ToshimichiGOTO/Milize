<?php

//==================================================

//不要物削除
//==================================================

//WordPressのバージョン表示
remove_action('wp_head', 'wp_generator');
//投稿のWPページ専用化（外部のブログ投稿ツールの機能対応削除）
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
//global-styles-inline-cssを無効化する
add_action('wp_enqueue_scripts', 'remove_my_global_styles');
function remove_my_global_styles()
{
	wp_dequeue_style('global-styles');
}
//絵文字　wpemojiSettingsの排除
function remove_emoji()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'remove_emoji');
//wp-block-libraryの読み込み停止
function remove_unuse_css()
{
	wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'remove_unuse_css', 9999);
//DNS プリフェッチの削除（外部のソースを引っ張ってくるサイト向けの機能）
function remove_dns_prefetch($hints, $relation_type)
{
	if ('dns-prefetch' === $relation_type) {
		return array_diff(wp_dependencies_unique_hosts(), $hints);
	}
	return $hints;
}
add_filter('wp_resource_hints', 'remove_dns_prefetch', 10, 2);

//---
function remove_width_attribute($html)
{
	$html = preg_replace('/(width|height)="\d*"\s/', "", $html);
	return $html;
}
add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);

function customize_img_attribute($content)
{
	$re_content = preg_replace('/(<img[^>]*)width="\d+"\s+height="\d+"\s/', '$1', $content);
	return $re_content;
}
add_filter('the_content', 'customize_img_attribute');
//--

//==================================================

//基本設定
//==================================================

//ツールバー消すやつ
add_filter('show_admin_bar', '__return_false');


//ナビゲーションの基本設定
function twpp_setup_theme()
{
	register_nav_menu('header-navi', 'ヘッダーナビ');
	register_nav_menu('footer-menu', 'フッターナビ');
}

add_action('after_setup_theme', 'twpp_setup_theme');

//SVGのアップロード許可
function add_file_types_to_uploads($file_types)
{

	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);

	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

//ページスラッグの英語化
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
	if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
		$slug = utf8_uri_encode($post_type) . '-' . $post_ID;
	}
	return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);

//WEB fontの設定
function my_scripts()
{
	wp_enqueue_style('google-fonts-noto-sans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700&display=swap" rel="stylesheet" rel="stylesheet"', array(), '1.0.0', 'all');
	wp_enqueue_style('google-fonts-noto-Serif', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;400;700&display=swap" rel="stylesheet"', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_scripts');


//CDN、js、CSSの読み込み設定
function add_my_files()
{
	/*WordPress 本体の jQuery を登録解除*/
	wp_deregister_script('jquery');
	/*jQuery を CDN から読み込む*/
	wp_enqueue_script(
		'jquery',
		'https://cdn.jsdelivr.net/npm/jquery@4/dist/jquery.min.js',
		array(),
		'4.0.0',
		true
	);
	/*サーバ内のjsの参照*/
	wp_enqueue_script(
		'base-script',
		get_theme_file_uri('/assets/js/common.js'),
		array('jquery'),
		filemtime(get_theme_file_path('/assets/js/common.js')),
		true
	);
	/*WPデフォルトcssの参照*/
	wp_enqueue_style(
		'wordpress-style',
		get_theme_file_uri('style.css'),
		array(),
		filemtime(get_theme_file_path('/style.css'))
	);
	/*comon.cssの参照*/
	wp_enqueue_style(
		'my-common',
		get_theme_file_uri('/assets/css/common.css'),
		array(),
		filemtime(get_theme_file_path('/assets/css/common.css'))
	);
	/*uncomon.cssの参照*/
	wp_enqueue_style(
		'my-uncommon',
		get_theme_file_uri('/assets/css/uncommon.css'),
		array(),
		filemtime(get_theme_file_path('/assets/css/uncommon.css'))
	);
	/*ページごと（テンプレートフォルダごと「-」必要）のcssの参照*/
	global $template;
	$str = basename($template);
	$str = str_replace('.php', '', $str);

	// ハイフンがあればそれより前を、なければそのままのファイル名を使う
	$name_part = strstr($str, '-', true);
	if ($name_part) {
		$str = $name_part;
	}

	$css_relative_path = '/assets/css/' . $str . '.css';
	$css_full_path = get_theme_file_path($css_relative_path);

	// ファイルが存在する場合のみ filemtime を取得
	if ($str && file_exists($css_full_path)) {
		$version = filemtime($css_full_path);
		wp_enqueue_style(
			'page-style',
			get_theme_file_uri($css_relative_path),
			array(),
			$version
		);
	}
}
add_action('wp_enqueue_scripts', 'add_my_files');


//==================================================

//カスタム投稿
//==================================================
//https://296.co.jp/article/52551120182310491

//サムネイルの有効化
add_theme_support('post-thumbnails');

//カテゴリー追加
function add_custom_post()
{
	//講座・教室／ブログ活動報告追加
	register_post_type(
		'blog',
		array(
			'label' => 'BLOG',
			'labels' => array(
				'menu_name' => 'BLOG'
			),
			'public' => true,
			'query_var' => true,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'blog'),
			'has_archive' => true,
			'show_in_rest' => true,
			'menu_position' => 5, // メニューの表示位置。初期値: null - コメントの下
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'author'
			)
		)
	);
	//お知らせ追加
	register_post_type(
		'news',
		array(
			'label' => 'NEWS',
			'labels' => array(
				'menu_name' => 'NEWS'
			),
			'public' => true,
			'query_var' => true,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'news'),
			'has_archive' => true,
			'show_in_rest' => true,
			'menu_position' => 7, // メニューの表示位置。初期値: null - コメントの下
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'author'
			)
		)
	);
	//register_taxonomy_for_object_type('category', 'news');
	register_taxonomy_for_object_type('post_tag', 'blog');
	register_taxonomy_for_object_type('post_tag', 'news');
}
add_action('init', 'add_custom_post');

// タクソノミーを追加
function add_taxonomy()
{
	register_taxonomy(
		//講座・教室／ブログ活動報告追加
		'blog_category', // タクソノミースラッグ
		'blog', // 使用するカスタム投稿タイプを指定
		array(
			'hierarchical' => true, // 階層を持たせるかを指定(trueでカテゴリー、falseでタグ)
			'label' => '独自カテゴリー', // メニューに表示されるアサル（ASAL）
			'singular_label' => 'カテゴリー', // 単体系のアサル（ASAL）
			'public' => true, // 投稿タイプをパブリックにする
			'show_ui' => true, // 管理画面上に編集画面を表示するかを指定
			'show_admin_column' => true
		)
	);
	register_taxonomy(
		//お知らせ追加
		'news_category', // タクソノミースラッグ
		'news', // 使用するカスタム投稿タイプを指定
		array(
			'hierarchical' => true, // 階層を持たせるかを指定(trueでカテゴリー、falseでタグ)
			'label' => '独自カテゴリー', // メニューに表示されるアサル（ASAL）
			'singular_label' => 'カテゴリー', // 単体系のアサル（ASAL）
			'public' => true, // 投稿タイプをパブリックにする
			'show_ui' => true, // 管理画面上に編集画面を表示するかを指定
			'show_admin_column' => true
		)
	);
}
add_action('init', 'add_taxonomy');
