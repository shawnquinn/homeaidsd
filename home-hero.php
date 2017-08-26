<?php
/**
 * Home - hero setup.
 *
 * @package understrap
 */

?>

	<!-- ******************* The Hero Area ******************* -->

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner" role="listbox">

			<?php //dynamic_sidebar( 'hero' ); ?>

				<div id="slide-1" class="widget_text carousel-item">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h1>Mission <span>&amp;</span> Vision</h1>
							</div>
						</div>
					</div>
				</div>

				<div id="slide-2" class="widget_text carousel-item">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h1>Sherman <span>&amp;</span></h1>
							</div>
						</div>
					</div>
				</div>

				<div id="slide-2" class="widget_text carousel-item">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h1>Sherman <span>&amp;</span></h1>
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

<script>
jQuery( ".carousel-item" ).first().addClass( "active" );
</script>
