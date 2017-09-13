<?php
/*
Template Name: Landing Page
*/
get_header(); ?>
<div class="row magtop">
<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="content" role="main">
	<?php while (have_posts()) : the_post(); ?>
		<header class="small-12 columns">
				<div class="full-width-banner" style="height:300px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
				<br><?php //reverie_entry_meta(); ?>
		</header>
	<div class="entry-content small-12 columns">
				<?php the_content(); ?>	
				<?php endwhile; // End the loop ?>

	</div>
	</div>
</div>		
<?php get_footer(); ?>
