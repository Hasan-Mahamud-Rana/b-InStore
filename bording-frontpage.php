<?php
/*
Template Name: Bording Frontpage
*/
?>

<?php get_header(); ?>


<!-- SLIDER -->
<div class="row mobtop">
		<ul data-orbit id="slidershow">
			<?php $counter =  0; ?>
			<?php query_posts('category_name=Slider&showposts=5'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php ++$counter; ?>
			<li data-orbit-slide="slide-<?php echo $counter; ?>" class="slide">
				<!-- slider img-size: 1200x500 -->
				<a href="<?php the_permalink(); ?>" title=""><?php if ( has_post_thumbnail() ) {the_post_thumbnail('slider-img'); } ?></a>
			      <div class="orbit-caption">
			        <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
			        <div class="show-for-large-up miniteaser">
			        <!-- get_excerpt function max 300 characters (functions.php) -->
			        <?php the_excerpt(); ?><a href="<?php the_permalink() ?>" title="Permanent link to <?php the_title_attribute(); ?>" style="display:none;">Læs mere</a>
			        </div>
			      </div>
			</li>
			<!-- Stop The Loop (but note the "else:" - see next line). -->
			<?php endwhile; ?>


			<!-- REALLY stop The Loop. -->
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</ul>
	</div><!-- /END SLIDER -->


<!-- Slider buttons -->
<div class="row">
	<div class="small-12 columns align">
	<div class="small-12 small-centered columns">
		<?php $counterbtn = 0; ?>
		<?php query_posts('category_name=Slider&showposts=5'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php ++$counterbtn; ?>
		<a data-orbit-link="slide-<?php echo $counterbtn; ?>" id="slidebtn" class="small-12 medium-6 large-3 columns smallheight slide-<?php echo $counterbtn; ?>">

			<div class="arrowbtn-<?php echo $counterbtn; ?> no-arrow"></div>

			  <?php the_title(); ?>


		</a>
		<!-- Stop The Loop (but note the "else:" - see next line). -->
		<?php endwhile; ?>


		<!-- REALLY stop The Loop. -->
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		</div>
	</div>
</div><!-- /END Slider buttons -->

<div class="small-12 large-12 columns whitebg" role="main"><!-- Main content wrapper -->

<!-- Row of content -->
<div class="row top whitebg">
	<!-- Frontpage text about the business -->
		<?php query_posts('category_name=Frontpagetext&showposts=1'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="small-12 medium-12 large-12 columns">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<?php the_content(); ?>
			</article>
		<!-- Stop The Loop (but note the "else:" - see next line). -->
		<?php endwhile; ?>


		<!-- REALLY stop The Loop. -->
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	<!-- /END Frontpage text about the business -->

	<!-- Two-cases row -->
	<?php //query_posts('category_name=forsiden-middle&showposts=2'); ?>
	<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!--article class="small-12 medium-6 large-3 columns smalltop article">
		<a href="<?php //the_permalink(); ?>" title="Permanent link to <?php //the_title_attribute(); ?>"><?php //if ( has_post_thumbnail() ) {the_post_thumbnail('cases'); } ?></a>
		<h3><a href="<?php //the_permalink() ?>" rel="bookmark" title="Permanent link to <?php //the_title_attribute(); ?>"><?php //the_title(); ?></a></h3>
		<p><?php //echo get_excerpt(); ?></p>
		<a href="<?php //the_permalink() ?>" title="Permanent link to <?php //the_title_attribute(); ?>" class="button tiny radius">Læs mere</a>
	</article-->
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php //endwhile; ?>


	<!-- REALLY stop The Loop. -->
	<?php //endif; ?>
	<?php //wp_reset_query(); ?>
</div><!-- /END Row of content -->

<!-- SEPARATOR
<div class="row linespace">
	<div class="small-12 columns">
		<div class="panel custom bluebg">
			<p>Proin a dui laoreet, accumsan libero eget, condimentum orci. In fermentum, tellus suscipit vestibulum consectetur, leo lacus gravida augue, ut tincidunt libero augue eget lorem.</p>
			<p class="smalltext"><strong>Hans Therp</strong>, F. E. Bording</p>
		</div>
	</div>
</div> /END SEPARATOR -->

<!-- Second row content
<div class="row whitebg">
		<?php //query_posts('category_name=forsiden-bottom&showposts=3'); ?>
		<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="small-12 medium-4 large-4 columns smalltop article">
				<a href="<?php //the_permalink(); ?>" title="Permanent link to <?php //the_title_attribute(); ?>"><?php //if ( has_post_thumbnail() ) {the_post_thumbnail('cases'); } ?></a>
				<h3><a href="<?php //the_permalink() ?>" rel="bookmark" title="Permanent link to <?php //the_title_attribute(); ?>"><?php //the_title(); ?></a></h3>
				<p><?php //echo get_excerpt(); ?></p>
				<a href="<?php //the_permalink() ?>" title="Permanent link to <?php //the_title_attribute(); ?>" class="button tiny radius">Læs mere</a>
			</article>

		<?php //endwhile; ?>


		<?php //endif; ?>
		<?php //wp_reset_query(); ?>
</div> /END Second row content /END Main content -->

</div>

<?php get_footer(); ?>