<?php
/**
 * Add Theme info Page
 */

function freshspin_fse_menu() {
	add_theme_page( esc_html__( 'FreshSpin FSE', 'freshspin-fse' ), esc_html__( 'About FreshSpin FSE', 'freshspin-fse' ), 'edit_theme_options', 'about-freshspin-fse', 'freshspin_fse_theme_page_display' );
}
add_action( 'admin_menu', 'freshspin_fse_menu' );

function freshspin_fse_admin_theme_style() {
	wp_enqueue_style('freshspin-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'freshspin_fse_admin_theme_style');

/**
 * Display About page
 */
function freshspin_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'freshspin-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'FreshSpin FSE is a clean and responsive free laundry WordPress theme for clothing, laundry services, room cleaning services, ironing, wash business and dry cleaning business.', 'freshspin-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'freshspin-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'freshspin-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'freshspin-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'freshspin-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'freshspin-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'freshspin-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'freshspin-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'freshspin-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'freshspin-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get FreshSpin PRO', 'freshspin-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'freshspin-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/laundry-service-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'freshspin-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'freshspin-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/freshspin/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'freshspin-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/documentation/freshspin/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'freshspin-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'freshspin-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'freshspin-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with FreshSpin FSE, please give your feedback.', 'freshspin-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/freshspin-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'freshspin-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>