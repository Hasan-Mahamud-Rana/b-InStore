<?php get_header(); ?>


<!-- Row for main content area -->
	<div class="small-12 columns magtop whitebg" id="content" role="main">
		<div class="row">
			<div class="small-12 columns">
				
			
			<h1 class="small-12 columns entry-title borderbtm nopadleft">
			<?php
						$tempcat = single_cat_title('',true);
						echo $tempcat;
			?>
			</h1>
		</div>
	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'bordingarchive', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'bordingarchive', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	</div>
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>

		
<?php get_footer(); ?>