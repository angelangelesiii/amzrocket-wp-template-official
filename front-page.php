<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AMZ_Rocket_Official
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="hero-section">
				<div class="spacer"></div>
				<div class="hero-content wrapper">
					<h1 class="headline">Skyrocket your sales now!</h1>
					<p class="subline">Join the hundreds of customers who doubled their sales.</p>
					<a href="#" class="btn">Optimize Now!</a>
				</div>
			</section>

			<section class="icons">
				<div class="content wrapper-medium">
					<h2>Launch <span style="color: #E80027;">higher</span> today!</h2>
					<p class="subline">Our steps are way simpler and efficient than the competition.</p>
					<div class="row">
						<div class="column medium-4 small-12">
							<i class="fa fa-list-ol" aria-hidden="true"></i>
							<h3>Listing Optimization</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nisi iste, molestiae ipsa aperiam veniam.</p>
						</div>
						<div class="column medium-4 small-12">
							<i class="fa fa-amazon" aria-hidden="true"></i>
							<h3>Amazon PPC</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat qui incidunt ab sequi sit laborum ratione magnam consequatur!</p>
						</div>
						<div class="column medium-4 small-12">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
							<h3>Amazon SEO</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum est rerum, delectus.</p>
						</div>
					</div>
				</div>
			</section>

			<section class="half-columns">
				<table class="half-columns-table">
					<tr class="row first-row half-column-row collapse">
						<td class="column image" style="background: url('<?php echo get_template_directory_uri().'/assets/images/1.jpg' ?>');">
							
						</td>
						<td class="column text">
							<div class="content">
								<h2>Listing Optimization</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias ut tempora voluptatem odit sit adipisci ipsam, ex modi nostrum cupiditate quae labore, quisquam sunt quod necessitatibus omnis.</p>
							</div>
						</td>
					</tr>
					<tr class="row second-row half-column-row collapse">
						<td class="column text">
							<div class="content">
								<h2>Amazon PPC</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi possimus voluptates recusandae non id accusamus, sapiente, commodi numquam nemo nisi tempore laborum voluptas maxime. Earum ratione nam alias a soluta magnam at eaque, doloribus quidem repellat, molestias harum porro repudiandae?</p>
							</div>
						</td>
						<td class="column image" style="background: url('<?php echo get_template_directory_uri().'/assets/images/2.jpg' ?>');">
							
						</td>
					</tr>
					<tr class="row third-row half-column-row collapse">
						<td class="column image" style="background: url('<?php echo get_template_directory_uri().'/assets/images/3.jpg' ?>');">
							
						</td>
						<td class="column text">
							<div class="content">
								<h2>Amazon SEO</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo odio eligendi cupiditate harum possimus qui saepe itaque deleniti cumque, sapiente fugiat modi tempora laudantium necessitatibus natus rerum facere inventore aspernatur, facilis.</p>
							</div>
						</td>
					</tr>
				</table>
			</section>

			<?php get_template_part('modules/fp-testimonials'); ?>

			<?php get_template_part('modules/fp-packages'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
