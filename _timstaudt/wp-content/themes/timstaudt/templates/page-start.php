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
				<?php the_post_thumbnail() ?>
				<div class="left-content-wrapper container">
				<div class="left-content">
					<?php the_content(); ?>
					<div class="social">
					<a href="" class="twitter"></a>
					<a href="" class="facebook"></a>
					<a href="" class="soundcloud"></a>
					<a href="" class="youtube"></a>
					</div>
				</div>
				</div>
			</div>

			<?php endwhile; endif; ?>


		</div>

		<div class="quote start-quote container">

			<p><?php the_field( "manifesto" ); ?></p>

		</div>

		<div id="primary" class="content-area container">

			<div class="row">

				<div class="small-12 medium-6 columns">
					<h2>Unterricht</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/teaser-left.jpg" alt="Teaser-Left">
					<p>Für mich gibt es nichts tolleres, als mein Wissen an andere die Spaß am Gitarre spielen haben weiterzugeben. Der Schüler soll selbst entscheiden, wo er hin will. Ich stehe ihm auf diesem Weg mit Rat und Tat als Coach zur Seite.</p>
					<a href="#" class="btn">Unterricht nehmen</a>

				</div>


  				<div class="small-12 medium-6 columns">
					<h2>Unterricht</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/teaser-right.jpg" alt="Teaser-Right">
					<p>Für mich gibt es nichts tolleres, als mein Wissen an andere die Spaß am Gitarre spielen haben weiterzugeben. Der Schüler soll selbst entscheiden, wo er hin will. Ich stehe ihm auf diesem Weg mit Rat und Tat als Coach zur Seite.</p>
					<a href="#" class="btn">Unterricht nehmen</a>
  				</div>

			</div>

		</div><!-- #primary .content-area -->

<?php get_footer(); ?>