<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package techit
 */

?>


		<?php global $techit_opt; ?>

		<?php if (!empty($techit_opt['techit_address_hide']) && $techit_opt['techit_address_hide']==true): ?>


			<!-- FOOTER TOP ADDRESS AREA -->
				<div class="top-address-area">
					<div class="<?php if(!empty($techit_opt['techit_footer_box_layout']) && $techit_opt['techit_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
						<div class="row">
							<div class="col-md-12">

								<div class="footer-top-address">
								<?php if(!empty($techit_opt['techit_address_logo_style']) && $techit_opt['techit_address_logo_style']=="s_logo_s2"){?>
									<!-- ADDRESS IMAGE LOGO -->
									<?php if (!empty($techit_opt['techit_address_logo'])): ?>
										<div class="top_address_logo text-center">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($techit_opt['techit_address_logo']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a>
										</div>
									<?php endif ?>
								<?php }else{?>
									<!-- SOCIAL TEXT LOGO -->
									<?php if (!empty($techit_opt['techit_address_title_text'])): ?>
										<h2 class="text-center">
											<?php
												echo wp_kses($techit_opt['techit_address_title_text'], array(
													'span' => array(),
												));
											?>
										</h2>
									<?php endif ?>
								<?php } ?>
								</div>

								<div class="top_address_content">
									<?php if (!empty($techit_opt['techit_address_road'])): ?>
										<span><i class="fas fa-map-marker-alt"></i><?php echo esc_html($techit_opt['techit_address_road']); ?></span>
									<?php endif; ?>
									<?php if (!empty($techit_opt['techit_address_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','techit')?><?php echo esc_html($techit_opt['techit_address_email']); ?>"><i class="fas fa-envelope"></i><?php echo esc_html($techit_opt['techit_address_email']); ?></a>
									<?php endif; ?>
									<?php if (!empty($techit_opt['techit_address_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','techit')?><?php echo esc_html($techit_opt['techit_address_mobile']); ?>"><i class="fas fa-phone-alt"></i><?php echo esc_html($techit_opt['techit_address_mobile']); ?></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- END FOOTER TOP ADDRESS AREA -->
			<?php endif; ?>

		<?php if (!empty($techit_opt['techit_social_hide']) && $techit_opt['techit_social_hide']==true): ?>

			<!-- FOOTER TOP AREA -->
				<div class="footer-top">
					<div class="<?php if(!empty($techit_opt['techit_footer_box_layout']) && $techit_opt['techit_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
						<div class="row">
							<div class="col-md-12">
								<div class="footer-top-inner">

								<?php if(!empty($techit_opt['techit_social_logo_style']) && $techit_opt['techit_social_logo_style']=="s_logo_s2"){?>
								<!-- SOCIAL IMAGE LOGO -->
								<?php if (!empty($techit_opt['techit_social_logo'])): ?>
									<div class="social_logo text-center">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($techit_opt['techit_social_logo']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a>
									</div>
								<?php endif ?>
								<?php }else{?>
								<!-- SOCIAL TEXT LOGO -->
								<?php if (!empty($techit_opt['techit_social_title_text'])): ?>
									<h2 class="text-center">
										<?php
											echo wp_kses($techit_opt['techit_social_title_text'], array(
												'span' => array(),
											));
										?>
									</h2>
								<?php endif ?>
								<?php } ?>


								<!-- FOOTER COPYRIGHT TEXT -->
								<?php if (!empty($techit_opt['techit_social_text'])): ?>
									<p class="text-center">
										<?php
											echo wp_kses($techit_opt['techit_social_text'], array(
												'span' => array(),
												'a' => array(
													'href' => array(),
													'title' => array()
												),
												'b' => array(),
												'p' => array(),
												'strong' => array(),
												'em' => array(),
												'br' => array(),
											));
										?>
									</p>
								<?php endif ?>

									<div class="footer-social-icon">
										<?php
											foreach($techit_opt['techit_social_icons'] as $key=>$value ) {

												if($value != ''){
													 echo '<a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a>';
												}
											}
										?>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- END FOOTER TOP AREA -->
			<?php endif; ?>

		<?php if (!empty($techit_opt['techit_widget_hide']) && $techit_opt['techit_widget_hide']==true): ?>

			<!-- FOOTER MIDDLE AREA -->
				<?php $footer_sidebar_count = $techit_opt['techit_widget_column_count']; ?>
					<?php if( 0 != $footer_sidebar_count ) { ?>
						<div class="footer-middle">
							<div class="<?php if(!empty($techit_opt['techit_footer_box_layout']) && $techit_opt['techit_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
								<div class="row">
									<?php // Default Sidebar count to 4
									if( '' == $footer_sidebar_count ) $footer_sidebar_count = 4;
									// Get the sidebar class
									$footer_sidebar_class = floor( 12/$footer_sidebar_count ); ?>
									<?php for( $footer = 1; $footer <= $footer_sidebar_count; $footer++ ) { ?>
										<?php if ( is_active_sidebar( 'techit-footer-' . $footer ) ) { ?>
											<div class="col-sm-12 col-md-6  col-lg-<?php echo esc_attr( $footer_sidebar_class ); ?> <?php if( $footer == $footer_sidebar_count ) echo esc_attr('last'); ?>">
												<?php dynamic_sidebar( 'techit-footer-' . $footer ); ?>
											</div>

										<?php } ?>
									<?php } ?>
								</div>
							</div>
						</div>

					<?php } // if 0 != sidebars ?>
			<!-- END FOOTER MIDDLE AREA -->
			<?php endif; ?>


			<?php if (!empty($techit_opt['techit_copyright_hide']) && $techit_opt['techit_copyright_hide']==true): ?>

			<!-- FOOTER BOTTOM AREA -->
			<div class="footer-bottom">
				<div class="<?php if(!empty($techit_opt['techit_footer_box_layout']) && $techit_opt['techit_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					<div class="row">

						<!-- FOOTER COPYRIGHT STYLE 1 -->
						<?php
						if(!empty($techit_opt['techit_footer_copyright_style']) && $techit_opt['techit_footer_copyright_style']=="copy_s1"){?>

							<div class="col-md-lg footer_style_1">
								<div class="copy-right-text text-center">
									<!-- FOOTER COPYRIGHT TEXT -->
									<?php if (!empty($techit_opt['techit_copyright_text'])): ?>
										<p>
											<?php
												echo wp_kses($techit_opt['techit_copyright_text'], array(
													'span' => array(),
													'a' => array(
														'href' => array(),
														'title' => array()
													),
													'b' => array(),
													'p' => array(),
													'strong' => array(),
													'em' => array(),
													'br' => array(),
												));
											?>
										</p>
									<?php endif ?>
								</div>
							</div>
						<!-- FOOTER COPYRIGHT STYLE 2 -->
						<?php }elseif(!empty($techit_opt['techit_footer_copyright_style']) && $techit_opt['techit_footer_copyright_style']=="copy_s2"){?>

							<div class="col-lg-6 col-md-6  col-sm-12">
								<div class="copy-right-text">
									<!-- FOOTER COPYRIGHT TEXT -->
									<?php if (!empty($techit_opt['techit_copyright_text'])): ?>
										<p>
											<?php
												echo wp_kses($techit_opt['techit_copyright_text'], array(
													'span' => array(),
													'a' => array(
														'href' => array(),
														'title' => array()
													),
													'b' => array(),
													'p' => array(),
													'strong' => array(),
													'em' => array(),
													'br' => array(),
												));
											?>
										</p>
									<?php endif ?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6  col-sm-12">
								<div class="footer-menu">
									<!-- FOOTER COPYRIGHT MENU -->
									 <?php if ( has_nav_menu( 'menu-2' ) ) {
											wp_nav_menu( array(
											'theme_location' => 'menu-2',
											'menu_class' => 'text-right',
											'fallback_cb' => false,
											'container' => '',
											) );
									 } ?>
								</div>
							</div>
						<!-- FOOTER COPYRIGHT STYLE 3 -->
						<?php }elseif(!empty($techit_opt['techit_footer_copyright_style']) && $techit_opt['techit_footer_copyright_style']=="copy_s3"){?>

							<div class="col-lg-6 col-md-6  col-sm-12 footer_style_3">
								<div class="footer-menu">
									<!-- FOOTER COPYRIGHT MENU -->
									 <?php if ( has_nav_menu( 'menu-2' ) ) {
											wp_nav_menu( array(
											'theme_location' => 'menu-2',
											'menu_class' => 'text-left',
											'fallback_cb' => false,
											'container' => '',
											) );
									 } ?>
								</div>
							</div>

							<div class="col-lg-6 col-md-6  col-sm-12 footer_style_3">
								<div class="copy-right-text text-right">
									<!-- FOOTER COPYRIGHT TEXT -->
									<?php if (!empty($techit_opt['techit_copyright_text'])): ?>
										<p>
											<?php
												echo wp_kses($techit_opt['techit_copyright_text'], array(
													'span' => array(),
													'a' => array(
														'href' => array(),
														'title' => array()
													),
													'b' => array(),
													'p' => array(),
													'strong' => array(),
													'em' => array(),
													'br' => array(),
												));
											?>
										</p>
									<?php endif ?>
								</div>
							</div>

						<!-- FOOTER COPYRIGHT STYLE 4 -->
						<?php }elseif(!empty($techit_opt['techit_footer_copyright_style']) && $techit_opt['techit_footer_copyright_style']=="copy_s4"){?>

							<div class="col-lg-6 col-md-6  col-sm-12">
								<div class="copy-right-text">
									<!-- FOOTER COPYRIGHT TEXT -->
									<?php if (!empty($techit_opt['techit_copyright_text'])): ?>
										<p>
											<?php
												echo wp_kses($techit_opt['techit_copyright_text'], array(
													'span' => array(),
													'a' => array(
														'href' => array(),
														'title' => array()
													),
													'b' => array(),
													'p' => array(),
													'strong' => array(),
													'em' => array(),
													'br' => array(),
												));
											?>
										</p>
									<?php endif ?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6  col-sm-12">
								<div class="footer-menu">
									<!-- FOOTER COPYRIGHT SOCIAL MENU -->
									<ul class="text-right">
										<?php
											foreach($techit_opt['techit_social_icons'] as $key=>$value ) {

												if($value != ''){
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fab fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>

									</ul>
								</div>
							</div>
						<?php } // end copyright style ?>
					</div>
				</div>
			</div>
			<!-- END FOOTER BOTTOM AREA -->

			<?php else: ?>

			<!-- FOOTER MIDDLE AREA -->
				<?php $footer_sidebar_count =4; ?>
					<?php if( 0 != $footer_sidebar_count ) { ?>
						<div class="footer-middle wpfd">
							<div class="container">
								<div class="row">
									<?php // Default Sidebar count to 4
									if( '' == $footer_sidebar_count ) $footer_sidebar_count = 4;
									// Get the sidebar class
									$footer_sidebar_class = floor( 12/$footer_sidebar_count ); ?>
									<?php for( $footer = 1; $footer <= $footer_sidebar_count; $footer++ ) { ?>
										<?php if ( is_active_sidebar( 'techit-footer-' . $footer ) ) { ?>
											<div class="wpfdp col-sm-12 col-md-6 col-lg-<?php echo esc_attr( $footer_sidebar_class ); ?> <?php if( $footer == $footer_sidebar_count ) echo esc_attr('last'); ?>">
												<?php dynamic_sidebar( 'techit-footer-' . $footer ); ?>
											</div>


										<?php } ?>
									<?php } ?>
								</div>
							</div>
						</div>
					<?php } // if 0 != sidebars ?>
			<!-- END FOOTER MIDDLE AREA -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9883367675787832"
     crossorigin="anonymous"></script>
<!-- Adsense -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9883367675787832"
     data-ad-slot="5976880679"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

			<!-- FOOTER BOTTOM AREA -->
			<div class="footer-bottom">
				<div class="<?php if(!empty($techit_opt['techit_footer_box_layout']) && $techit_opt['techit_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					<div class="row">
						<div class="col-md-12">
							<div class="copy-right-text text-center">
								<!-- FOOTER COPYRIGHT TEXT -->
									<p>
										<?php
											echo esc_html_e("Copyright &copy; techit 2020 all right reserved.","techit");
										?>
									</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END FOOTER BOTTOM AREA -->
			<?php endif; ?>



        </div>
        <!-- MAIN WRAPPER END -->

<?php wp_footer(); ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9883367675787832"
     crossorigin="anonymous"></script>
</body>
</html>
