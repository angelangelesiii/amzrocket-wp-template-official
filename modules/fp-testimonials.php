<?php // TESTIMONIALS SECTION FOR FRONTPAGE ?>

<?php if (have_rows('testimonials', 'options')): ?>

<section class="testimonials-section">
	<h2>Join the hundreds who are satisfied</h2>

	<div class="testimonials">

	<?php while (have_rows('testimonials', 'options')): the_row(); ?>
			
		<div class="testimonial-container">
			<p>
				<blockquote class="testimonial-message">&ldquo;<?php the_sub_field('testimonial'); ?>&rdquo;</blockquote>
			</p>
			<p>
				<div class="testimonial-photo" style="background-image: url('<?php the_sub_field('photo') ?>');"></div><br/>
				<cite>
					<span class="name"><?php the_sub_field('name'); ?></span>
					
					<?php if (get_sub_field('job_title')): ?>
					<br/><span class="job-title"><?php the_sub_field('job_title') ?></span>
					<?php endif; ?>
		
				</cite>
			</p>
		
		
		</div>
		
		<?php endwhile; ?>

	</div>
	
</section>

<?php endif; ?>