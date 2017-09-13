<?php
/*
Template Name: Bording Fondsboersmeddelser
*/
?>

<?php get_header(); ?>



<div class="small-12 large-12 columns magtop whitebg" id="content" role="main">
	<div class="row">
		<div class="small-12 columns">
			<h1 class="small-12 columns entry-title borderbtm nopadleft"><?php echo get_the_title(); ?></h1>
		</div>	
	</div>
	
	<div class="row">
	<div class="small-12 columns">
	<table class="fonds">
	  <thead>
	    <tr>
	      <th>Fondsbørsmeddelelse</th>
	      <th class="nogo">Resumé</th>
	      <th class="nogo">Dato</th>
	    </tr>
	  </thead>
	  <tbody>
	<?php 
	$boers_query = new WP_Query();
	?>

	<?php $boers_query->query('category_name=fondsboersmeddelelser&showposts=10&paged=' . $paged); ?>
	<?php if ( $boers_query->have_posts() ) : while ( $boers_query->have_posts() ) : $boers_query->the_post(); ?>
		    <tr>
		      <td><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><h5><?php the_title(); ?></h5></td></a>
		      <td class="tabletext"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_excerpt(); ?></a></td>
		      <td class="tabletext"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php reverie_entry_meta(); ?></a></td>
		    </tr>
	<?php endwhile; ?>
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<!-- REALLY stop The Loop. -->
	<?php endif; ?>

	  </tbody>
	</table>
	</div>
	</div>

	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('fonds_pagination') ) { fonds_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php wp_reset_query(); ?>


</div>

<?php get_footer(); ?>