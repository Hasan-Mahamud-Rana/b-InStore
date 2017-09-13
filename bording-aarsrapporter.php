<?php
/*
Template Name: Bording Aarsrapporter
*/
?>

<?php get_header(); ?>
<!-- Start row -->
	
<div class="small-12 large-12 columns magtop whitebg" id="content" role="main">
<div class="row">
	<div class="small-12 columns">
		<h1 class="small-12 columns entry-title borderbtm nopadleft"><?php echo get_the_title(); ?></h1>
	</div>	
</div>


<?php 
$rapport_query = new WP_Query();
?>
<?php $counter2 =  0; ?>
<?php $rapport_query->query('category_name=aarsrapport&order=DESC&showposts=6&paged=' . $paged); ?>
<?php if ( $rapport_query->have_posts() ) : while ( $rapport_query->have_posts() ) : $rapport_query->the_post(); ?>
<?php ++$counter2 ?>
<div class="row">
	
<div class="small-12 columns">
<dl class="accordion" data-accordion>
  <dd>
    <a href="#panel<?php echo $counter2; ?>"><h4><?php the_title(); ?></h4></a>
    <div id="panel<?php echo $counter2; ?>" class="content">
      <?php the_content(); ?>
    </div>
  </dd>
</dl>
</div>
</div>
<!-- Stop The Loop (but note the "else:" - see next line). -->
<?php endwhile; ?>

<!-- REALLY stop The Loop. -->
<?php endif; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('rapport_pagination') ) { rapport_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>

<?php wp_reset_query(); ?>
	

</div>
 <!-- /END row -->
<?php get_footer(); ?>