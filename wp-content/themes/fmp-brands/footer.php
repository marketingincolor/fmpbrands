<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );			
 ?>
					
				<footer class="footer" role="contentinfo">

					<div class="inner-footer grid-x grid-margin-x grid-padding-x">
						
						<div class="small-12 medium-12 large-12 cell">
							<nav role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>
						
						<div class="small-12 medium-12 large-12 cell">

							<div class="grid-x grid-margin-x grid-padding-x align-justify show-for-medium ">
								<div class="cell small-12 medium-6"><a href="<?php echo home_url(); ?>"><?php echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?></a></div>
								<div class="cell small-12 medium-6 text-right align-self-middle"><span class="source-org copyright">Copyright&copy; <?php echo date('Y'); ?> Rhino7</span></div>
							</div>

							<div class="grid-x grid-margin-x grid-padding-x align-center show-for-small-only">
								<div class="cell small-12 medium-6 text-center" style="margin-bottom:1em;"><a href="<?php echo home_url(); ?>"><?php echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?></a></div>
								<div class="cell small-12 medium-6 text-center" style="margin-top:1em;"><span class="source-org copyright">Copyright&copy; <?php echo date('Y'); ?> Rhino7</span></div>
							</div>

						</div>
					
					</div> <!-- end #inner-footer -->

				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->