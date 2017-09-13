<?php get_header(); ?>



<!-- Row for main content area -->
	<div class="small-12 columns magtop whitebg" id="content" role="main">
	<div class="row">
	<div class="small-12 columns">
		<h2 class="small-12 columns entry-title borderbtm nopadleft"><?php _e('Søgeresultater for', 'reverie'); ?> "<?php echo get_search_query(); ?>"</h2>
	</div>
	
	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'searchresults', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'searchresults', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>
</div>
	</div>

<?php get_footer(); ?>