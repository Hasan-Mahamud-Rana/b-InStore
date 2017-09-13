<?php get_header(); ?>
<!-- Row for main content area -->
<div class="small-12 large-12 columns magtop whitebg" id="content" role="main">
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
		<header class="small-12">
			<h1 class="entry-title borderbtm nopadleft"><?php the_title(); ?></h1>
		</header>
	</div>
	<div class="row">
		<div class="small-12 large-8 columns">
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="row">
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</div>
				<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				</footer>
			</article>
		</div>
		<?php endwhile; ?>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>