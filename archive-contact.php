<?php get_header(); ?>
<!-- Row for main content area -->
<div class="small-12 columns magtop whitebg" id="content" role="main">
	<div class="row">
		<div class="small-12">
			<h1 class="entry-title">Kontakt</h1>
		</div>
	</div>
	<div class="row">
		<div class="small-12">
			<table border="0">
				<tbody>
					<tr>
						<td>
							<p style="line-height: 140%;"><strong>Adresse</strong><br>
								Svanemøllevej 41 – 2900 Hellerup<br>
							Gammel Strandvej 8 – 9000 Aalborg</p>
						</td>
						<td>
							<p style="line-height: 140%;"><strong>Telefon</strong><br>
							+45 7550 7833</p>
						</td>
						<td>
							<p style="line-height: 140%;"><strong>E-post</strong><br>
								<a href="#">Email</a></p>
							</td>
							<td>
								<p style="line-height: 140%;"><strong>Sociale medier</strong><br>
									<a href="#" target="blank">Följ oss på Facebook!</a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="small-8 columns">
					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="small-6 columns">
						<?php the_title(); ?>
						<a href="https://wordpress.org/plugins/really-simple-popup/image.png" class="hs-rsp-popup"><img src="https://wordpress.org/plugins/really-simple-popup/image.png" alt="image"/></a>
					</div>
					<?php endwhile; ?>
					<?php else : ?>
					<?php get_template_part( 'bordingarchive', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>