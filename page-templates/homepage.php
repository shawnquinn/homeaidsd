<?php
/**
 * Template Name: Home Landing Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();

?>


<?php get_template_part('home-hero'); ?>

<?php
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper home-page" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" hidden>

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

	<!-- ******************* The Welcome Area ******************* -->
	<section id="welcome" class="container">
			<div class="row">
				<div class="col-12 wow fadeIn" data-wow-offset="150">
					<h2 class="section-title text-center"><?php echo esc_html_e('Needs Meet Opportunity', 'understrap') ?></h2>
					<p class="section-lead lead text-center"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'understrap') ?></p>
				</div>
			</div>
			<div class="row align-items-center pt-3 pb-5 my-3 wow fadeIn" data-wow-offset="230">
				<div class="col-md-4">
						<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/home-hand-icon.png" alt="<?php echo esc_html_e('Needs Meet Opportunity', 'understrap') ?>">
				</div>

				<div class="col-md-4">
					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Victims', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>

					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Family', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Children', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>

					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Veterans', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-5">
					<button class="btn btn-lg btn-primary btn-block" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Get Involved', 'understrap') ?></button>
				</div>
			</div>
	</section><!-- Section #Welcome end -->

	<!-- ******************* The Providers Area ******************* -->
	<section id="providers" class="container-fluid">
		<div class="row">
			<div class="img-contain col-md-6 pl-0 d-none d-md-block wow fadeInLeft" data-wow-duration="2.33s"></div>
			<div class="col-md-6 py-5 wow fadeInRight">
					<div class="content">
						<h3><?php echo esc_html_e('Service Providers', 'understrap'); ?></h3>
						<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis a ute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'understrap'); ?></p>

						<div class="row pt-4">
							<div class="col-lg-6">
								<button class="btn btn-md btn-primary btn-block" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Learn More', 'understrap') ?></button>
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>

	<!-- ******************* The Latest Causes Area ******************* -->
	<section id="latest-causes">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="text-center section-title"><?php echo esc_html_e('Our Latest Causes', 'understrap'); ?></h3>
					<p class="section-lead lead text-center"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'understrap'); ?></p>
				</div>
			</div>

			<div class="row align-items-center py-5 causes">
				<div class="col-md-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="200">
					<a class="d-block" href="<?php echo esc_url( home_url('/') ); ?>">
						<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/causes/c1.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
					</a>
					<h4><?php echo esc_html_e('Alpha Sqaure', 'understrap') ?></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					<a class="read-more" href="<?php echo esc_url( home_url('') ) ?>"><?php echo esc_html_e('Learn More', 'understrap') ?></a>
				</div>

				<div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="200">
					<a class="d-block" href="<?php echo esc_url( home_url('/') ); ?>">
						<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/causes/c2.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
					</a>
					<h4><?php echo esc_html_e('Memory-Care Homes', 'understrap') ?></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					<a class="read-more" href="<?php echo esc_url( home_url('') ) ?>"><?php echo esc_html_e('Learn More', 'understrap') ?></a>
				</div>

				<div class="col-md-4 wow fadeInRight" data-wow-duration="1.5s" data-wow-offset="200">
					<a class="d-block" href="<?php echo esc_url( home_url('/') ); ?>">
						<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/causes/c3.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
					</a>
					<h4><?php echo esc_html_e('Veteran\'s Resource Center', 'understrap') ?></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					<a class="read-more" href="<?php echo esc_url( home_url('') ) ?>"><?php echo esc_html_e('Learn More', 'understrap') ?></a>
				</div>
			</div>
		</div>
	</section>

<!-- ******************* The Testimonials Area ******************* -->
	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="text-center section-title wow fadeInUp" data-wow-duration="1.5s" date-wow-offset="200"><?php echo esc_html_e('What People Are Saying', 'understrap'); ?></h3>
					<p class="section-lead lead text-center"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'understrap'); ?></p>
				</div>
			</div>
		</div>

		<div id="carouselQuotes" class="carousel slide wow fadeInUp" data-wow-duration="1.5s" wow-data-offset="200" data-ride="carousel">

			<ol class="carousel-indicators">
		    <li data-target="#carouselQuotes" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselQuotes" data-slide-to="1"></li>
		  </ol>

			<div class="carousel-inner" role="listbox">

				<div id="quote-1" class="widget_text carousel-item active">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-10 mx-auto">
								<blockquote class="text-center"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 'understrap') ?></blockquote>
								<span class="author text-center"><?php echo esc_html_e('Jane Doe', 'understrap') ?> <span><?php echo esc_html_e('Sponsor', 'understrap') ?></span></span>
							</div>
						</div>
					</div>
				</div><!-- .quote -->

				<div id="quote-2" class="widget_text carousel-item">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-10 mx-auto">
								<blockquote class="text-center"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 'understrap') ?></blockquote>
								<span class="author text-center"><?php echo esc_html_e('Jane Doe', 'understrap') ?> <span><?php echo esc_html_e('Sponsor', 'understrap') ?></span></span>
							</div>
						</div>
					</div>
				</div><!-- .quote -->

			</div><!-- .carousel-inner -->

		</div><!-- .carousel -->

	</section>

<!-- ******************* The Latest News ******************* -->

<section id="news">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center section-title wow fadeInUp" data-wow-duration="1.5s" date-wow-offset="200"><?php echo esc_html_e('Our Latest News', 'understrap'); ?></h3>
			</div>
		</div>

		<div class="row">
			<div class="col-12">

			</div>
		</div>
	</div>
</section>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
