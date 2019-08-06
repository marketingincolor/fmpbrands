<?php 
/**
 * The template for displaying custom front page
 *
 */

?>

<div class="hero">
	<div class="content grid-container full">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
			<div class="hero-overlay Xsmall-12 show-for-large Xmedium-10 large-8 cell" >
				<div class="grid-x grid-margin-x hero-inner">
					<div class="small-12 medium-6 medium-offset-1 large-6 large-offset-1 cell">
					<?php if( get_field('hero_title') ): ?>
						<h1><?php the_field('hero_title'); ?></h1>
					<?php endif; ?>
					<?php if( get_field('hero_copy') ): ?>
						<p><?php the_field('hero_copy'); ?></p>
					<?php endif; ?>
					</div>
					<div class="small-10 cell">
						<div class="arrow bounce" style="float:right; left:-20px;">
							<a href="#cta-form"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fmp-brandlp-hero-icon-downarrow.svg"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-overlay hero-mobile small-12 hide-for-large cell" >
				<div class="grid-x grid-margin-x hero-inner">
					<div class="small-12 cell">
					<?php if( get_field('hero_title') ): ?>
						<h1><?php the_field('hero_title'); ?></h1>
					<?php endif; ?>
					<?php if( get_field('hero_copy') ): ?>
						<p><?php the_field('hero_copy'); ?></p>
					<?php endif; ?>
					</div>
					<div class="arrow bounce" style="margin:auto;">
						<a href="#cta-form"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fmp-brandlp-hero-icon-downarrow.svg"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>






<div class="brands">
	<div class="content grid-container full">
		<div class="inner-content grid-x Xgrid-margin-x Xgrid-padding-x text-center">
		    <div class="small-12 cell">
		    	<div class="grid-x Xgrid-margin-x brand-inner">
		    		<div class="small-12 cell">
					<?php if( get_field('brands_title') ): ?>
						<h2><?php the_field('brands_title'); ?></h2>
					<?php endif; ?>
					</div>
				</div>
				<div class="grid-x Xgrid-margin-x brand-inner">
				<?php
				$brands = get_field('brands_group');
				if( $brands ): ?>
					<div class="small-12 cell hide-for-medium">
						<div class="subbrand">
							<ul class="accordion" data-accordion data-allow-all-closed="true">
								<li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title"><?php echo $brands['brand_one_title']; ?></a>
									<div class="accordion-content" data-tab-content>
										<img src="<?php echo $brands['brand_one_logo']; ?>" alt="<?php echo $brands['brand_one_title']; ?>" />
										<p><?php echo $brands['brand_one_text']; ?></p>
									</div>
								</li>
								<li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title"><?php echo $brands['brand_two_title']; ?></a>
									<div class="accordion-content" data-tab-content>
										<img src="<?php echo $brands['brand_two_logo']; ?>" alt="<?php echo $brands['brand_two_title']; ?>" />
										<p><?php echo $brands['brand_two_text']; ?></p>
									</div>
								</li>
								<li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title"><?php echo $brands['brand_three_title']; ?></a>
									<div class="accordion-content" data-tab-content>
										<img src="<?php echo $brands['brand_three_logo']; ?>" alt="<?php echo $brands['brand_three_title']; ?>" />
										<p><?php echo $brands['brand_three_text']; ?></p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="small-10 small-offset-1 cell show-for-medium">
						<div class="subbrand grid-x grid-padding-x medium-up-1 large-up-3">
							<div class="cell">
								<img src="<?php echo $brands['brand_one_logo']; ?>" alt="<?php echo $brands['brand_one_title']; ?>" />
								<p><?php echo $brands['brand_one_text']; ?></p>
							</div>
							<div class="cell">
								<img src="<?php echo $brands['brand_two_logo']; ?>" alt="<?php echo $brands['brand_two_title']; ?>" />
								<p><?php echo $brands['brand_two_text']; ?></p>
							</div>
							<div class="cell">
								<img src="<?php echo $brands['brand_three_logo']; ?>" alt="<?php echo $brands['brand_three_title']; ?>" />
								<p><?php echo $brands['brand_three_text']; ?></p>
							</div>

						</div>
					</div>
				<?php endif; ?>
				</div>
				<div class="grid-x grid-margin-x brand-inner">
					<div class="small-12 cell">
					<?php if( get_field('brands_cta_text') ): ?>
						<a href="#cta-form" class="button-cta"><?php the_field('brands_cta_text'); ?></a>
					<?php endif; ?>
					</div>
				</div>		
			</div>
		</div>
	</div>
</div>







	<div class="about">

		<div class="content grid-container full">
			<div class="inner-content grid-x grid-margin-x grid-padding-x">
				<div class="about-overlay Xsmall-12 show-for-large Xmedium-10 large-8 cell" >
					<div class="grid-x grid-margin-x about-inner">
						<div class="small-12 medium-6 medium-offset-1 large-6 large-offset-1 cell">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/fmp-brndlp-about-logo.png">	
						<?php if( get_field('about_copy') ): ?>
							<p><?php the_field('about_copy'); ?></p>
						<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="about-mobile small-12 hide-for-large cell" >
					<div class="grid-x grid-margin-x about-inner">
						<div class="small-12 cell">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/fmp-brndlp-about-logo-white.png">
						<?php if( get_field('about_copy') ): ?>
							<p><?php the_field('about_copy'); ?></p>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>




	<div class="form"><a id="cta-form"></a>
		<div class="content grid-container full">
			<div class="inner-content grid-x grid-margin-x grid-padding-x">
				<div class="small-12 large-10 large-offset-1 cell" >
					<div class="grid-x grid-margin-x form-inner">
						<div class="small-10 small-offset-1 medium-6 medium-offset-0 small-order-2 medium-order-1 cell">
						<?php echo do_shortcode('[ninja_form id=1]'); ?>
						</div>
						<div class="small-10 small-offset-1 medium-6 medium-offset-0 small-order-1 medium-order-2 cell">
						<?php if( get_field('form_title') ): ?>
							<h2><?php the_field('form_title'); ?></h2>
						<?php endif; ?>

						<?php if( get_field('form_copy') ): ?>
							<p><?php the_field('form_copy'); ?></p>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>