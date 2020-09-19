<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package tm_marketing
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'tm_marketing_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<?php 
	$options = get_option( 'tm_marketing' );
?>

<header class="master-header-section">
	<div class="container">
		<div class="row">
			<div class="col-12 padd-none">
				<div class="header-flex">
					<div class="brand-logo">
					<?php 
						$want_logo = $options['_want_logo'];
						$image = $options['logo'];
						$logo_text = $options['logo_text'];
						if ($want_logo == true) :
							?>
							<a href="<?php echo esc_url(site_url('/')) ?>"><img src="<?php echo esc_url($image); ?>" alt=""></a>
							<?php else:  ?>
								<a href="<?php echo esc_url(site_url('/')) ?>"><h3><?php echo esc_attr($logo_text); ?></h3></a>
						<?php endif; ?>
					</div>
					<div class="menu-bar">
						<?php 
							wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => 'master-menu-navbar',
									'container_id'    => 'master-menu-navbar',
									'menu_class'      => 'master-menu-list',
									'menu_id'         => 'master-menu-list',
								)
							);
						?>
					</div>
					<div class="menu-bar-right header-icon-controll">
						<div class="search-controll-icon">
							<i class="ion-android-search"></i>
						</div>
						<a href="#" class="tm-btn-secondary border-less bg-color">Get A Quote</a>
						<div class="left-sidebar-menu-area">
							<div class="left-sidebar-menu-controller">
								<span class="bar"></span>
							</div>
						</div>
					</div>
				</div>
				<!-- end header flex -->
			</div>
		</div>
	</div>
</header>
<header class="master-m-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="m-header-inner">
					<div class="m-logo-area">
					<?php 
						$want_logo = $options['_want_logo'];
						$image = $options['logo'];
						$logo_text = $options['logo_text'];
						if ($want_logo == true) :
							?>
							<a href="<?php echo esc_url(site_url('/')) ?>"><img src="<?php echo esc_url($image); ?>" alt=""></a>
							<?php else:  ?>
								<a href="<?php echo esc_url(site_url('/')) ?>"><h3><?php echo esc_attr($logo_text); ?></h3></a>
						<?php endif; ?>
					</div>
					<div class="m-right-area">
						<a href="#" class="tm-btn-secondary bordered bg-color">Get A Quote</a>
						<div class="search-controll-icon">
							<i class="ion-android-search"></i>
						</div>
						<div class="left-sidebar-menu-area">
							<div class="left-sidebar-menu-controller">
								<span class="bar"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="mobile-header-menu">
	<div class="m-side-menu-top">
		<div class="logo">
		<?php 
			$want_logo = $options['_want_logo'];
			$image = $options['logo'];
			$logo_text = $options['logo_text'];
			if ($want_logo == true) :
				?>
				<a href="<?php echo esc_url(site_url('/')) ?>"><img src="<?php echo esc_url($image); ?>" alt=""></a>
				<?php else:  ?>
					<a href="<?php echo esc_url(site_url('/')) ?>"><h3><?php echo esc_attr($logo_text); ?></h3></a>
			<?php endif; ?>
		</div>
		<div class="close-btn"><i class="ion-android-close"></i></div>
	</div>
	<div class="menu-box">

	</div>
</div>
<!-- <div class="fullpage-search-window">

</div> -->
