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
	<!-- ******************* zEND Providers Area ******************* -->

<!-- ******************* The Testimonials Area ******************* -->
	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="text-center section-title wow fadeInUp" data-wow-duration="1.5s" date-wow-offset="200"><?php echo esc_html_e('What People Are Saying', 'understrap'); ?></h3>

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

<!-- ******************* The Sponsors Area ******************* -->
<section id="sponsors">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center section-title wow fadeIn" date-wow-offset="200">Our Sponsors <span>&amp;</span> Partners</h3>
				<p class="section-lead lead text-center wow fadeIn" data-wow-duration="2s" data-wow-offset="200"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'understrap'); ?></p>
			</div>
		</div>

		<div class="row pt-4">
			<div class="mission col-md-6">
				<h4 class="wow fadeIn" data-wow-offset="200">Our Mission</h4>
				<p class="wow fadeIn" data-wow-offset="200">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

				<div id="accordion" role="tablist">
				  <div class="card wow fadeInUp" data-wow-offset="200">
				    <div class="card-header" role="tab" id="headingOne">
				      <h5 class="mb-0">
				        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				          <i class="fa fa-home" aria-hidden="true"></i> Section 1 <span class="plus-minus"><i class="fa fa-plus fa-minus" aria-hidden="true"></i></span>
				        </a>
				      </h5>
				    </div>

				    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
				      </div>
				    </div>
				  </div>
				  <div class="card wow fadeInUp" data-wow-offset="200">
				    <div class="card-header" role="tab" id="headingTwo">
				      <h5 class="mb-0">
				        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          <i class="fa fa-bank" aria-hidden="true"></i> Section 2 <span class="plus-minus"><i class="fa fa-plus" aria-hidden="true"></i></span>
				        </a>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
				      </div>
				    </div>
				  </div>
				  <div class="card wow fadeInUp" data-wow-offset="200">
				    <div class="card-header" role="tab" id="headingThree">
				      <h5 class="mb-0">
				        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<i class="fa fa-anchor" aria-hidden="true"></i> Section 3 <span class="plus-minus"><i class="fa fa-plus" aria-hidden="true"></i></span>
				        </a>
				      </h5>
				    </div>
				    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
				      <div class="card-body">
				         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
				      </div>
				    </div>
				  </div>
				</div>
			</div>

			<div class="logos col-md-6">
				<h4 class="wow fadeIn" data-wow-offset="200">Our Sponsors</h4>
				<img class="img-fluid d-block mx-auto pt-5 wow fadeInRight" data-wow-offset="200" src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logos.png" alt="<?php echo esc_html_e('', 'understrap') ?>">
			</div>
		</div>
	</div>
</section>

<!-- ******************* The Latest News ******************* -->
<section id="news">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center section-title wow fadeIn" date-wow-offset="200"><?php echo esc_html_e('Our Latest News', 'understrap'); ?></h3>
				<p class="section-lead lead text-center wow fadeIn" data-wow-duration="2s" data-wow-offset="200"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'understrap'); ?></p>
			</div>
		</div>

		<div class="row my-5">
			<div class="col-md-5">
					<div class="post-featured wow fadeIn" data-wow-offset="200" data-wow-duration="2s">
						<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/post-featured.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
						<div class="overlay-box text-center">
							<h4>Homes Fore the Homeless Golf Tournament 2017</h4>
							<p>Aug 25th, 2017 |	NEWS | <a href="#">EVENTS</a></p>
							<button class="btn btn-md btn-primary btn-block" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Read More', 'understrap') ?></button>
						</div>
					</div>
			</div>

			<div class="col-md-7">
				<div class="post-latest d-flex wow fadeInRight" data-wow-offset="200">
					<div class="image-thumb">
						<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/post-thmb-1.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
					</div>
					<div class="post-article">
						<a href="#"><h4>‘Homes Fore the Homeless’ Golf Tournament 2017</h4></a>
						<p>Aug 25th, 2017	|	NEWS	|	EVENTS</p>
						<a href="#">Read More »</a>
					</div>
				</div>

				<div class="post-latest d-flex wow fadeInRight" data-wow-offset="200">
					<div class="image-thumb">
						<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/post-thmb-2.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
					</div>
					<div class="post-article">
						<a href="#"><h4>Gold Nugget Win at PCBC for HomeAid San Diego</h4></a>
						<p>Sept 14th, 2017	|	NEWS	|	EVENTS</p>
						<a href="#">Read More »</a>
					</div>
				</div>

				<div class="post-latest d-flex wow fadeInRight" data-wow-offset="200">
					<div class="image-thumb">
						<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/post-thmb-3.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
					</div>
					<div class="post-article">
						<a href="#"><h4>"Rey of Hope" - 15 Year Celebration</h4></a>
						<p>Oct 27th, 2017	|	NEWS	|	EVENTS</p>
						<a href="#">Read More »</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ******************* The Donate CTA ******************* -->
<section id="donate">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-3">
				<img class="img-fluid d-block mx-auto pt-5 wow zoomIn" data-wow-offset="200" data-wow-duration="2.7s" src="<?php echo get_template_directory_uri(); ?>/img/donate-heart.png" alt="<?php echo esc_html_e('Your Donation Could Save a Life', 'understrap') ?>">
			</div>

			<div class="col-md-6">
				<h3 class="wow fadeIn" data-wow-duration="2.7s" data-wow-offset="200">Your Donation Could Save a Life</h3>
				<p class="lead wow fadeIn" data-wow-duration="3.3s" data-wow-offset="200">Every dollar donated to HomeAid San Diego goes directly towards the building or renovation of a shelter or housing project.</p>
			</div>

			<div class="col-md-3">
				<button class="btn btn-lg btn-primary btn-block wow fadeIn" data-wow-duration="2s" data-wow-offset="200" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Donate Today', 'understrap') ?></button>
			</div>
		</div>
	</div>
</section>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
