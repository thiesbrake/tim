<?php
/**
 * The template for displaying the Unterricht-Page
 *
 * Template Name: Unterricht
 *
 * @package _timstaudt
 */

get_header(); ?>
		<div class="section-visual start-visual" id="section-visual">
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

		</div>

		<div class="clearfix"></div>

		<div class="quote start-quote container">

			<?php the_field( "manifesto" ); ?>

		</div>

		<div id="primary" class="content-area container">

			<div class="content-text">

					<?php the_content() ?>

			</div>

		</div><!-- #primary .content-area -->
		<?php endwhile; endif; ?>

<?php get_footer(); ?>