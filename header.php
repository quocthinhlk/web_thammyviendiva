<!DOCTYPE html>
<html lang="vi">
<head>
	<meta name="description" content="Description Web"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<?php $image = get_field('favicon', 'option');  ?>
	<link rel="icon" href="<?php echo esc_url($image['url']); ?>" type="image/x-icon"/>

	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
	<header class="header header-menu">
		<div class="head-menu">
			<div class="container top-header-container">
				<div class="row">
					<div class="pull-right social-icons">
						<p class="social-networks">
							<a target="_blank" class="facebook" href="<?php the_field('facebook', 'option'); ?>"><i class="fab fa-facebook-f"></i></a>
							<a target="_blank" class="twitter" href="<?php the_field('twitter', 'option'); ?>"><i class="fab fa-twitter"></i></a>
							<a target="_blank" class="youtube" href="<?php the_field('youtube', 'option'); ?>"><i class="fab fa-youtube"></i></a>
							<a target="_blank" class="rss" href="<?php the_field('rss', 'option'); ?>"><i class="fas fa-rss"></i></a>
						</p> 
					</div>
				</div>
			</div>
			<div class="header-main fixed-header">
				<div class="container nav-container">
					<div class="row">
						<div class="col-sm-12">
							<div class="mainmenu-logo">
								<div class="pull-left left-menu nav-menu">
									<div id="left-menu-container" class="menu-left-menu-container">
										<?php
										wp_nav_menu(
											array(
												'theme_location'     => "left-menu",
												'menu_class'        => "sf-menu main-menu",
												'container'         => "",
												'menu_id'			=> "left-menu",
											)
										);
										?>
									</div> 
								</div>
								<div class="logo text-center">
									<a href="<?php echo get_site_url() ?>">
										<?php $image = get_field('logo', 'option'); ?>
										<img src="<?php echo esc_url($image['url']); ?>" />
									</a>
								</div>
								<div class="pull-right right-menu nav-menu">
									<div id="right-menu-container" class="menu-right-menu-container">
										<?php
										wp_nav_menu(
											array(
												'theme_location'     => "right-menu",
												'menu_class'        => "sf-menu main-menu",
												'container'         => "",
												'menu_id'			=> "right-menu",
											)
										);
										?>

									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="topnav fixed-header" id="myTopnav">
			<div class="nav-logo">
				<div class="logo-menu-mobile"><a href="<?php echo get_bloginfo('url') ?>"><img src="<?php echo esc_url($image['url']); ?>"></a></div>
				<div class="icon-menu"><a href="javascript:void(0);" onclick="myFunction()" ><i class="fas fa-bars"></i></a></div>
			</div>
			<div class="nav-menu">
				<div class="nav-menu-mobile" id="nav-menu-mobile">
					<?php
					wp_nav_menu(
						array(
							'theme_location'     => "mobile-menu",
							'menu_class'        => "menu-mobile",
							'container'         => "",
							'menu_id'			=> "mobile-menu",
						)
					);
					?>
				</div>
			</div>
		</div>
		
	</header>
	
	
