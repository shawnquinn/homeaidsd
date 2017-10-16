<?php
/**
 * Home - hero setup.
 *
 * @package understrap
 */

?>

	<!-- ******************* The Hero Area ******************* -->

		<div id="carouselMain" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner" role="listbox">

			<?php //dynamic_sidebar( 'hero' ); ?>

			<ol class="carousel-indicators">
		    <li data-target="#carouselMain" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselMain" data-slide-to="1"></li>
				<li data-target="#carouselMain" data-slide-to="2"></li>
		  </ol>

				<div id="slide-1" class="widget_text carousel-item">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-sm-7">
								<h1 class="text-center text-sm-left"><?php echo esc_html_e('Mission ', 'understrap') ?><span>&amp;</span><?php echo esc_html_e(' Vision', 'understrap') ?></h1>
								<p class="text-center text-sm-left"><?php echo esc_html_e('Building new lives for homeless families and individuals through housing and community outreach.', 'understrap') ?></p>

								<div class="row mt-5">
									<div class="col-lg-6">
										<button class="btn btn-lg btn-primary btn-block waves-effect waves-blue" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Donate Today ') ?><i class="fa fa-heart fa-lg pl-2"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="slide-2" class="widget_text carousel-item">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-sm-7">
								<h1 class="text-center text-sm-left"><?php echo esc_html_e('Mission ', 'understrap') ?><span>&amp;</span><?php echo esc_html_e(' Vision', 'understrap') ?></h1>
								<p class="text-center text-sm-left"><?php echo esc_html_e('Building new lives for homeless families and individuals through housing and community outreach.', 'understrap') ?></p>

								<div class="row mt-5">
									<div class="col-lg-6">
										<button class="btn btn-lg btn-primary btn-block waves-effect waves-blue" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Donate Today ') ?><i class="fa fa-heart fa-lg pl-2"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="slide-3" class="widget_text carousel-item">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-sm-7">
								<h1 class="text-center text-sm-left"><?php echo esc_html_e('Mission ', 'understrap') ?><span>&amp;</span><?php echo esc_html_e(' Vision', 'understrap') ?></h1>
								<p class="text-center text-sm-left"><?php echo esc_html_e('Building new lives for homeless families and individuals through housing and community outreach.', 'understrap') ?></p>

								<div class="row mt-5">
									<div class="col-lg-6">
										<button class="btn btn-lg btn-primary btn-block waves-effect waves-blue" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Donate Today ') ?><i class="fa fa-heart fa-lg pl-2"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

			    <span class="sr-only">Previous</span>

			 </a>

			 <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

			    <span class="carousel-control-next-icon" aria-hidden="true"></span>

			    <span class="sr-only">Next</span>

			</a>

		</div><!-- .carousel -->
