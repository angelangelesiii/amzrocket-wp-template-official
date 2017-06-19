<?php // PACKAGES SECTION FOR FRONTPAGE ?>

<?php if (have_rows('fp_package_showcase', 'options')): ?>

<section class="showcases">
	
	<?php while (have_rows('fp_package_showcase', 'options')): the_row(); ?>

	<div class="showcase">
		<div class="wrapper-medium">
			<h2 class="showcase-title"><?php the_sub_field('showcase_title'); ?></h2>
			<div class="showcase-description"><?php the_sub_field('showcase_description'); ?></div>
		</div>
		
		<div class="products row collapsed">
		
			<?php for($i=1; $i<=3; $i++): // Loop within showcase products?>
		
			<?php $productPostID = get_sub_field('showcase_product_'.$i); ?>
			
			<div class="product column medium-4 small-12 <?php if($i==2) echo 'highlighted-product'?>">
				<h3 class="product-title"><?php the_field( 'package_display_title', $productPostID ); ?></h3>
				<p class="product-price">&euro;<?php the_field( 'package_price', $productPostID ); ?></p>
				<div class="product-description"><?php the_field( 'package_description', $productPostID ); ?></div>
				<div class="product-link">
					<a href="<?php echo get_permalink($productPostID) ?>" class="btn">View Package</a>
				</div>
			</div>
		
			<?php endfor; ?>
		
		</div>
	</div>

	<?php endwhile; ?>

</section>


<?php endif; ?>