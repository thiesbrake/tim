<?php
/**
 * The template for displaying the Start-Page
 *
 * Template Name: Startseite
 *
 * @package _timstaudt
 */

get_header(); ?>
		<div class="section-visual start-visual">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>

			<div class="visual">
				<div class="img-wrapper">
					<?php the_post_thumbnail() ?>
				</div>
				<div class="left-content-wrapper container">
					<div class="left-content animated fadeInLeft">
						<?php the_field( "nav-field" ); ?>
						<div class="social">
						<a href="https://twitter.com/Tim_Staudt" target="_blank" class="twitter"></a>
						<a href="" class="facebook"></a>
						</div>
					</div>
				</div>
			</div>

			<?php endwhile; endif; ?>


		</div>

		<div class="clearfix"></div>

		<div class="quote start-quote container">

			<?php the_field( "manifesto" ); ?>

		</div>

		<div id="primary" class="content-area container">

			<div class="row">

				<div class="small-12 medium-6 columns teaser_left">
					<h2><?php the_field( "headline_left" ); ?></h2>
					<img src="<?php the_field( "image_left" ); ?>">
					<?php the_field( "content_left" ); ?>
				</div>


  				<div class="small-12 medium-6 columns teaser_right">
					<h2><?php the_field( "headline_right" ); ?></h2>
					<img src="<?php the_field( "image_right" ); ?>">
					<?php the_field( "content_right" ); ?>
  				</div>

			</div>

		</div><!-- #primary .content-area -->

<?php get_footer(); ?>