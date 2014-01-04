<?php
/**
 * The template for displaying the Kontakt-Page
 *
 * Template Name: Kontakt
 *
 * @package _timstaudt
 */

get_header(); ?>
		<div class="section-visual kontakt-visual" id="section-visual">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>

			<div class="visual">
				
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