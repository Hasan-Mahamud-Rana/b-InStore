<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<div class="small-12 columns end marginbottom greyborder">
	<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
		<div class="small-12 columns">
		<header>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<?php reverie_entry_meta(); ?>
		</header>
		</div>

		<div class="small-12 columns nopadleft">
		
		<?php if ( has_post_thumbnail() ) { ?>  
		<div class="small-12 medium-4 large-3 columns">	
			<figure><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cases'); ?></a></figure>
		</div>
		<?php } else { } ?>
		
		<div class="small-12 medium-6 large-6 columns left">
			<div class="entry-content miniteaser">
				<p><?php echo get_excerpt(); ?><br><br><a href="<?php the_permalink() ?>" title="Permanent link to <?php the_title_attribute(); ?>" class="button tiny radius">Læs mere</a></p>
			</div>
			
		</div>
		
		</div>

	</article>
</div>
