<?php
global $post;
$args = array(
	'posts_per_page' => 4,
	'post_type' => 'activity'
);
$myposts = get_posts($args);
foreach ($myposts as $post) : setup_postdata($post);
?>
	<article class="list-item">
		<a href="<?php the_permalink(); ?>">
			<div class="flex-add align-center">
				<div class="flex-box flex-basis200">
					<div class="image-wrap anime">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
				<div class="flex-box flex-basis-auto">
					<div class="attached">
						<div class="date-category">
							<p class="datetime">
								<time datetime="the_time( 'Y-m-d' )">
									<?php the_time('Y.m.d'); ?>
								</time>
							</p>
							<?php
							if ($terms = get_the_terms($post->ID, 'activity_category')) {
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
<?php
endforeach;
wp_reset_postdata();
?>
            <div class="button-wrap margin-top80">
                <div class="button_cover">
                    <a href="<?php echo home_url('/activity/'); ?>" class="button" target="_blank">
                        <p>
                            アクティビティ一覧へ
                        </p>
                    </a>
                </div>
            </div>