<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- preloader -->
		<div class="loading">
			<div class="loading-center">
				<div class="loading-center-absolute">
					<div class="preloader-wave">
						<div class="sk-rect sk-rect1"></div>
						<div class="sk-rect sk-rect2"></div>
						<div class="sk-rect sk-rect3"></div>
						<div class="sk-rect sk-rect4"></div>
						<div class="sk-rect sk-rect5"></div>
					</div>
				</div>
			</div>
		</div>
<div class="main-section">
    <?php
    get_template_part('templates/header','menu');
    ?>