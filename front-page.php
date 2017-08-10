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

			<section class="hero-section" style="background-image: url('<?php 
			// echo background url for hero section
			if (get_field('general_background_image','options')) :
				echo get_field('general_background_image','options');
			else:
				echo get_template_directory_uri().'/assets/images/amzbg_b.jpg';
			endif;

			?>');">
				<div class="spacer"></div>
				<div class="hero-content wrapper">
				<?php 
				// Healine content
				$fpHeadline = 'Skyrocket your sales now!';
				$fpSubtext = 'You can edit this section under admin > site options > Hero Section';
				$fpBtnText = 'Button Text';
				$fpBtnURL = '#';
				if (get_field('fp_headline','options')) $fpHeadline = get_field('fp_headline','options');
				if (get_field('fp_subtext','options')) $fpSubtext = get_field('fp_subtext','options');
				if (get_field('fp_btn_text','options')) $fpBtnText = get_field('fp_btn_text','options');
				if (get_field('fp_btn_url','options')) $fpBtnURL = get_field('fp_btn_url','options');
				?>
					<h1 class="headline"><?php echo $fpHeadline ?></h1>
					<p class="subline"><?php echo $fpSubtext ?></p>
					<a href="<?php echo $fpBtnURL ?>" class="btn"><?php echo $fpBtnText ?></a>
				</div>
			</section>

			<section class="icons">
				<div class="content wrapper-medium">
					<h2>Launch <span style="color: #E80027;">higher</span> today!</h2>
					<p class="subline">Our steps are way simpler and efficient than the competition.</p>
					<div class="row">
						
						<!-- Column 1 -->
						<div class="column medium-4 small-12 icon icon-1">
						<?php // Icon for column 1
						if (get_field('item_1_icon','options')): ?>
							<img src="<?php the_field('item_1_icon','options'); ?>" alt="" class="icon">
						<?php else: ?>
							<i class="fa fa-list-ol" aria-hidden="true"></i>
						<?php endif; ?>
						<?php // Title for column 1 
						if (get_field('item_1_title','options')): ?>
							<h3><?php the_field('item_1_title','options'); ?></h3>
						<?php else: ?>
							<h3>Title for Icon 1</h3>
						<?php endif; ?>
						<?php // Text for column 1 
						if (get_field('item_1_text','options')): ?>
							<p><?php the_field('item_1_text','options'); ?></p>
						<?php else: ?>
							<p>Please change this text under admin > site options > Info Section.</p>
						<?php endif; ?>
						</div>

						<!-- Column 2 -->
						<div class="column medium-4 small-12 icon icon-1">
						<?php // Icon for column 2
						if (get_field('item_2_icon','options')): ?>
							<img src="<?php the_field('item_2_icon','options'); ?>" alt="" class="icon">
						<?php else: ?>
							<i class="fa fa-amazon" aria-hidden="true"></i>
						<?php endif; ?>
						<?php // Title for column 2
						if (get_field('item_2_title','options')): ?>
							<h3><?php the_field('item_2_title','options'); ?></h3>
						<?php else: ?>
							<h3>Title for Icon 2</h3>
						<?php endif; ?>
						<?php // Text for column 2
						if (get_field('item_2_text','options')): ?>
							<p><?php the_field('item_2_text','options'); ?></p>
						<?php else: ?>
							<p>Please change this text under admin > site options > Info Section.</p>
						<?php endif; ?>
						</div>

						<!-- Column 3 -->
						<div class="column medium-4 small-12 icon icon-1">
						<?php // Icon for column 3
						if (get_field('item_3_icon','options')): ?>
							<img src="<?php the_field('item_3_icon','options'); ?>" alt="" class="icon">
						<?php else: ?>
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						<?php endif; ?>
						<?php // Title for column 3
						if (get_field('item_3_title','options')): ?>
							<h3><?php the_field('item_3_title','options'); ?></h3>
						<?php else: ?>
							<h3>Title for Icon 2</h3>
						<?php endif; ?>
						<?php // Text for column 3
						if (get_field('item_3_text','options')): ?>
							<p><?php the_field('item_3_text','options'); ?></p>
						<?php else: ?>
							<p>Please change this text under admin > site options > Info Section.</p>
						<?php endif; ?>
						</div>

					</div>
				</div>
			</section>

			<section class="half-columns">

				<?php 
				// Half row variables
				$Section1Title = 'Row 1 Title';
				$Section1Image = get_template_directory_uri().'/assets/images/1.jpg';
				$Section1Text = 'You can change the text of this section under admin > site options >  Info Section. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ipsum iusto quibusdam, natus quos deserunt quasi veritatis consectetur magnam eligendi!';
				$Section2Title = 'Row 2 Title';
				$Section2Image = get_template_directory_uri().'/assets/images/2.jpg';
				$Section2Text = 'You can change the text of this section under admin > site options >  Info Section. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ipsum iusto quibusdam, natus quos deserunt quasi veritatis consectetur magnam eligendi!';
				$Section3Title = 'Row 3 Title';
				$Section3Image = get_template_directory_uri().'/assets/images/3.jpg';
				$Section3Text = 'You can change the text of this section under admin > site options >  Info Section. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ipsum iusto quibusdam, natus quos deserunt quasi veritatis consectetur magnam eligendi!';

				// Conditionals
				if (get_field('section_1_title','options')) $Section1Title = get_field('section_1_title','options');
				if (get_field('section_1_image','options')) $Section1Image = get_field('section_1_image','options');
				if (get_field('section_1_text','options')) $Section1Text = get_field('section_1_text','options');

				if (get_field('section_2_title','options')) $Section2Title = get_field('section_2_title','options');
				if (get_field('section_2_image','options')) $Section2Image = get_field('section_2_image','options');
				if (get_field('section_2_text','options')) $Section2Text = get_field('section_2_text','options');

				if (get_field('section_3_title','options')) $Section3Title = get_field('section_3_title','options');
				if (get_field('section_3_image','options')) $Section3Image = get_field('section_3_image','options');
				if (get_field('section_3_text','options')) $Section3Text = get_field('section_3_text','options');
				?>

				<table class="half-columns-table">
					<tr class="row first-row half-column-row collapse">

						<td class="column image" style="background: url('<?php echo $Section1Image ?>');">
							
						</td>
						<td class="column text">
							<div class="content">
								<h2><?php echo $Section1Title ?></h2>
								<p><?php echo $Section1Text ?></p>
							</div>
						</td>
					</tr>
					<tr class="row second-row half-column-row collapse">
						<td class="column text">
							<div class="content">
								<h2><?php echo $Section2Title ?></h2>
								<p><?php echo $Section2Text ?></p>
							</div>
						</td>
						<td class="column image" style="background: url('<?php echo $Section2Image ?>');">
							
						</td>
					</tr>
					<tr class="row third-row half-column-row collapse">
						<td class="column image" style="background: url('<?php echo $Section3Image ?>');">
							
						</td>
						<td class="column text">
							<div class="content">
								<h2><?php echo $Section3Title ?></h2>
								<p><?php echo $Section3Text ?></p>
							</div>
						</td>
					</tr>
				</table>
			</section>

			<?php get_template_part('modules/fp-testimonials'); ?>

			<?php get_template_part('modules/fp-packages'); ?>

			<?php get_template_part('modules/fp-newsletter'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
