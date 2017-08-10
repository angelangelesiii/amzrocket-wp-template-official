<?php // NEWSLETTER OPT-IN SECTION FOR FRONTPAGE ?>

<?php if (have_rows('testimonials', 'options')): ?>
	<section class="newsletter">
		<div class="content">
			<div class="wrapper">
				<div class="wrapper-medium">
					<h2 class="section-title">Be the first to know about our latest offers</h2>
					<p class="subtext">Subscribe to our newsletter to get updates that matters the most!</p>
					<div class="wrapper newsletter-form">
						<?php echo do_shortcode( get_field('newsletter_plugin_shortcode', 'options') ); ?>
					</div>
				</div>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri().'/assets/images/rocket-icon.png'; ?>" alt="" class="background-rocket">
	</section>
<?php endif; ?>