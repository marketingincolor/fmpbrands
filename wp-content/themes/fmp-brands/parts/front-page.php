<?php 
/**
 * The template for displaying custom front page
 *
 */
$hero_bg = get_field( 'hero_background' );
$about_logo = get_field( 'about_logo' );
$about_bg = get_field( 'about_background' );
$about_mobbg = get_field( 'about_mobile_background' );
$form_bg = get_field( 'form_background');
$form_mobbg = get_field( 'form_mobile_background');
?>

<div class="hero" style="background: url(<?php echo $hero_bg; ?>) no-repeat scroll center center / cover;">

		<div class="content grid-container full">
			<div class="inner-content grid-x grid-margin-x grid-padding-x">


				<div class="hero-overlay small-12 medium-10 large-7 cell" >

					<div class="grid-x grid-margin-x hero-inner">
						<div class="small-12 medium-6 medium-offset-1 large-6 large-offset-1 cell">

						<?php if( get_field('hero_title') ): ?>
							<h1><?php the_field('hero_title'); ?></h1>
						<?php endif; ?>

						<?php if( get_field('hero_copy') ): ?>
							<p><?php the_field('hero_copy'); ?></p>
						<?php endif; ?>

						</div>
					</div>

				</div>


			</div>
		</div>

</div>

	<div class="brand">
		<div class="content grid-container">
			<div class="inner-content grid-x grid-margin-x grid-padding-x">
			    <div class="small-12 medium-12 large-12 cell">
				<?php if( get_field('brands_title') ): ?>
					<h2><?php the_field('brands_title'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('brands_cta_text') ): ?>
					<a href="#cta-form" class="cta-button"><?php the_field('brands_cta_text'); ?></a>
				<?php endif; ?>				
				</div>
			</div>
		</div>
	</div>

	<div class="about">
	<?php if( get_field('about_logo_text') ): ?>
		<h2><?php the_field('about_logo_text'); ?></h2>
	<?php endif; ?>

	<?php if( get_field('about_copy') ): ?>
		<p><?php the_field('about_copy'); ?></p>
	<?php endif; ?>
	</div>

	<div class="form" id="cta-form">
	<?php if( get_field('form_title') ): ?>
		<h2><?php the_field('form_title'); ?></h2>
	<?php endif; ?>

	<?php if( get_field('form_copy') ): ?>
		<p><?php the_field('form_copy'); ?></p>
	<?php endif; ?>
	</div>