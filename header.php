<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- filter added to wp_title in functions.php -->
	<title><?php wp_title(); ?></title>
	<!-- executes functions attached to wp_head action hook -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="container-fluid">
<?php
	if(!is_front_page()): ?>
		<!-- header image -->
		<div id="header-img" style="background-image:url('<?php header_image(); ?>');"></div>
		<!-- navbar -->
		<div class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
				  <a class="navbar-brand" href="<?php echo get_home_url(); ?>">Theme Tutorials</a>
				</div>
				<div class="">
					<?php wp_nav_menu([
						'theme_location'=>'main_nav',
						'container'=>false,
						'menu_class'=>'nav navbar-nav navbar-right'
					]); ?>
				</div>
			</div>
		</div><!-- .navbar -->
	</div>
</header>
	<?php endif; ?>
<?php
	if(!is_front_page()): ?>		
		<div class="container">
<?php endif; ?>