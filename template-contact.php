<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<div id="content" <?php body_class(); ?>>
	<div id="inner-content" class="row help-content">
		<main id="main" class="small-12 medium-12 large-12" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
			<section class="entry-content magtop" itemprop="articleBody">
				<header class="small-12 columns">
					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
				</header>
				<?php the_content(); ?>
				<hr>
			</section>
		</article>
		<?php endwhile; endif; ?>
		</main>
	</div>
	<?php get_template_part( 'parts/loop', 'contact' ); ?>
</div>
<?php get_footer(); ?>