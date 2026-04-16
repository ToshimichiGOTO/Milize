<?php $terms = get_terms('movie_category'); ?>
<aside class="movie-sidebar">
	<?php if (!empty($terms)) : ?>
		<div class="category-list">
			<ul>

				<li class="getting-ready"><a>シーズン2</a>
					<div class="badge">近日公開</div>
				</li>
				<?php foreach ($terms as $term) : ?>
					<li>
						<a href="<?php print get_term_link($term); ?>">
							<?php print $term->name; ?>
						</a>
					</li>
				<?php endforeach; ?>
			<?php endif; ?>
			</ul>
		</div>
</aside>