<article class="page type-page status-publish" role="article" itemscope="" itemtype="http://schema.org/WebPage">
	<div class="row">
		<div class="small-8">
			<?php $query = new WP_Query( array( 'order' => 'asc' , 'post_type' => 'contact' , 'post_status' => 'publish', 'posts_per_page' => -1  ) ); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="small-6 columns">
				<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>"  data-rel="lightbox"><img class="contactImg" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="<?php the_title(); ?>" width="100" align="left" /></a>
				<strong><?php the_title(); ?></strong>
				<?php the_content(); ?>
				<?php the_excerpt(); ?>
				<hr>
			</div>
			<?php endwhile;  wp_reset_postdata(); else : ?>
			<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
			<?php endif; ?>
		</div>
	</div>
</article>