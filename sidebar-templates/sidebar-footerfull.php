<?php
/**
 * Sidebar setup for footer full.
 *
 * @package tm_marketing
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'tm_marketing_container_type' );
$options = get_option( 'tm_marketing' );
?>


	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row">

				<div class="col-12 col-lg-3">
					<?php $footer_contact = $options['footer_contact'];
						if ($footer_contact) :
							foreach ($footer_contact as $f_contact) :
					?>
					<div class="f-widget-area">
						<div class="f-widget-bottom">
							<div class="f-logo">
								<img src="<?php echo esc_url($f_contact['f-logo'])?>" alt="">
							</div>
							<div class="f-desc">
								<p><?php echo $f_contact['f-desc'];?></p>
							</div>
							<ul class="social-icon">
								<?php 
									foreach ($f_contact['footer_social'] as $social) :
								?>
									<li><a href="<?php echo $social['s_url']?>"><i class="<?php echo $social['s_icon']?>"></i></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
					<?php endforeach; endif; ?>
				</div>
				<!-- end col -->
				<div class="col-12 col-lg-3">
					<?php $widget_title_1 = $options['widget_title_1'];
					$f_service_menu = $options['fservice_menu'];
					?>
					<div class="f-widget-area">
						<h3 class="f-widget-title"><?php echo esc_html( $widget_title_1 )?></h3>
						<div class="f-widget-bottom">
							<?php 
								if ($f_service_menu) { ?>
									<ul class="footer_menu">
										<?php
										$menu = wp_get_nav_menu_items($f_service_menu);
										foreach ($menu as $menu_item) {
											?>
												<li><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
											<?php
										} ?>
									</ul>
									<?php 
								}
							?>
						</div>
					</div>
				</div>
				<!-- end col -->
				<div class="col-12 col-lg-3">
					<?php $widget_title_2 = $options['widget_title_2'];
					$flink_menu = $options['flink_menu'];
					?>
					<div class="f-widget-area">
						<h3 class="f-widget-title"><?php echo esc_html( $widget_title_2 )?></h3>
						<div class="f-widget-bottom">
							<?php 
								if ($flink_menu) { ?>
									<ul class="footer_menu">
										<?php
										$menu = wp_get_nav_menu_items($flink_menu);
										foreach ($menu as $menu_item) {
											?>
												<li><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
											<?php
										} ?>
									</ul>
									<?php 
								}
							?>
						</div>
					</div>
				</div>
				<!-- end col -->
				
				<div class="col-12 col-lg-3">
					<?php $widget_title_3 = $options['widget_title_3'];
					$footer_contact_info = $options['footer_contact_info'];
					?>
					<div class="f-widget-area">
						<h3 class="f-widget-title"><?php echo esc_html( $widget_title_3 )?></h3>
						<div class="f-widget-bottom">
							<ul class="contact_info">	
								<?php foreach ($footer_contact_info as $contact_info) :  ?>
									<li><?php echo esc_html( $contact_info['contact_desc'] )?></li>
									<li><i class="ion-ios-location-outline"></i><?php echo esc_html( $contact_info['f_location'] )?></li>
									<li><i class="ion-ios-telephone-outline"></i><?php echo esc_html( $contact_info['f_number'] )?></li>
									<li><i class="ion-ios-email-outline"></i><?php echo esc_html( $contact_info['f_mail'] )?></li>
								<?php 	endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<!-- end col -->
				
			</div>

		</div>

	</div><!-- #wrapper-footer-full -->
