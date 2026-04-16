<?php
get_header();
?>
<main id="blog" class="blog archive">
	<h1 class="brackets">
		<?php single_cat_title(); ?>
	</h1>

	<div class="container default">
		<div class="column-single">
			<?php get_template_part('./include/parts/sidebar', 'blog'); ?>

			<div class="list-wrapper margin-b">
				<?php if (have_posts()) : ?>
					<?php
					while (have_posts()) : the_post();
						$thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : 'https://placehold.jp/150x150.png';
					?>

						<article class="list-item">
							<a href="<?php the_permalink(); ?>">
								<div class="flex-add align-center">
									<div class="flex-box flex-basis200">
										<div class="image-wrap anime">
											<img src="<?php print $thumbnail; ?>" alt="">
										</div>
									</div>
									<div class="flex-box flex-basis-auto">
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
										<h2>
											<?php the_title(); ?>
										</h2>
									</div>
								</div>
							</a>
						</article>
					<?php endwhile; ?>
					<?php
					set_query_var('paging_query', $wp_query);
					get_template_part('paging');
					?>
				<?php else : ?>
					何も投稿がありません。
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>