<?php get_header(); ?>

<!-- Row for main content area -->

	<div class="small-12 columns magtop whitebg" id="content">

		<div class="row">
			<?php /* Start loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
			<header class="small-12 columns">
						<div class="small-12 columns">
							<h1 class="small-12 columns entry-title borderbtm nopadleft"><?php the_title(); ?></h1>	
						</div>
						<div class="small-12 columns">
						<?php reverie_entry_meta(); ?>
						</div>
						<!--<div class="small-12 columns">
							<?php if ( has_post_thumbnail() ) {the_post_thumbnail('cases'); } ?>
						</div>-->
			</header>
			
			<div class="small-12 medium-12 large-8 columns" role="main">
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<div class="small-12 columns singletext">
						<?php the_content(); ?>
					</div>
					<footer>
						<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
						<p class=""><?php the_tags(); ?></p>
						<!--<?php edit_post_link('Edit this Post'); ?>-->
					</footer>
				</article>
				<!--<div class="panel">
					<div class="row">
						<div class="large-3 columns">
							<?php echo get_avatar( get_the_author_meta('user_email'), 95 ); ?>
						</div>
						<div class="large-9 columns">
							<h4><?php the_author_posts_link(); ?></h4>
							<p class="cover-description"><?php the_author_meta('description'); ?></p>
						</div>
					</div>
				</div>-->
				<!--<?php comments_template(); ?>-->
			<?php endwhile; // End the loop ?>
			</div>
			<?php get_sidebar(); ?>
		</div>

		<div class="row">
			<div class="small-12 columns">
				<div class="linespace"></div>	
			</div>
		</div>
		
		
		<div class="row">
			<div class="small-12 columns">
				<!-- ekstra div så de står aligned -->
				<div class="small-12 columns">
				<h4>mere fra Bording InStore</h4>
				</div>
			</div>
			<div class="small-12 columns">
				<?php
					global $post;
					$cat_ID=array();
					$categories = get_the_category(); //get all categories for this post
					  foreach($categories as $category) {
					    array_push($cat_ID,$category->cat_ID);
					  }
					  $args = array(
					  'orderby' => 'date',
					  'order' => 'DESC',
						'post_type' => 'post',
						'numberposts' => 4,
						'post__not_in' => array($post->ID),
						'category__in' => $cat_ID
					  ); // post__not_in will exclude the post we are displaying
				    $cat_posts = get_posts($args);
						if ($cat_posts) {
						  foreach ($cat_posts as $cat_post) {
						    ?>
						    
							    <div class="small-12 medium-12 large-3 columns end">
							    	<a href="<?php echo get_permalink($cat_post->ID); ?>" title="Permanent link to <?php echo get_the_title($cat_post->ID); ?>">
							    	<div class="panel miniteaser">
							    	<h4><?php echo get_the_title($cat_post->ID); ?></h4>
							    		<!--<p><?php echo get_excerpt(); ?></p>-->
							    		<p><?php echo substr( $cat_post->post_excerpt, 0, 250 ) . '...'; ?></p>
							    	</div>
							    	</a>
							    </div>
						    
						    <?php
						  }
						}
				?>
				
			</div>
			
		</div>
	</div>

<?php get_footer(); ?>