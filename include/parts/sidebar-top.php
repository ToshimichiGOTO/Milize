<?php $terms = get_terms( 'news_category' ); ?>
<aside class="news-sidebar">
	<?php if ( !empty( $terms ) ) : ?>
	<div class="container default">
		<div class="category-list">
			<ul>
				<li><a href="<?php echo get_post_type_archive_link( 'news' ); ?>">ALL</a></li>
				<?php foreach ( $terms as $term ) : ?>
				<li>
					<a href="<?php print get_term_link( $term ); ?>">
					<?php print $term->name; ?>
					</a>
				</li>
				<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</aside>
