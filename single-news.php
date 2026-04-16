<?php
get_header();
?>
<?php while (have_posts()) : the_post(); ?>
	<?php $terms = get_the_terms($post->ID, 'tax_blog'); ?>
	<main class="post-page" id="blog">
		<section class="blog posted">
			<div class="container default">
				<div class="column-single">
					<div class="title-container">
						<h1>
							<?php the_title(); ?>
						</h1>
					</div>
					<div class="attached">
						<div class="date-category">
							<?php
							if ($terms = get_the_terms($post->ID, 'blog_category')) {
								foreach ($terms as $term) {
									echo ('<p class="category">');
									echo esc_html($term->name);
									echo ('</p>');
								}
							}
							?>
						</div>
						<ul class="tag">
							<?php
							$posttags = get_the_tags();
							if ($posttags) {
								foreach ($posttags as $tag) {
									echo '<li>' . $tag->name . '</li>';
								}
							}
							?>
						</ul>
					</div>
					<div class="edit-area">
						<?php the_content(); ?>
					</div>
					<?php get_template_part('./include/parts/sidebar', 'taxonomy'); ?>
					<div class="flex-button margin-t">
						<div class="button_cover">
							<a class="button" href="<?php echo get_post_type_archive_link('blog'); ?>">
								blog一覧
							</a>
						</div>
						<div class="button_cover">
							<a class="button" href="#" onclick="history.back(-1);return false;">
								ひとつ前に戻る
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container default">

			</div>
		</section>
	</main>
<?php endwhile; ?>
<?php get_footer(); ?>