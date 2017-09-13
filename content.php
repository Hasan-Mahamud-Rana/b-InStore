<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>
<div class="small-12 medium-6 large-3 columns end">
	<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
		<header>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<?php reverie_entry_meta(); ?>
		</header>
		<div class="entry-content minitext">
			<figure><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('large'); } ?></a></figure>
			<p><?php echo get_excerpt(); ?></p>
		</div>
		<a href="<?php the_permalink() ?>" title="Permanent link to <?php the_title_attribute(); ?>" class="button tiny radius">Læs mere</a>
	</article>
</div>