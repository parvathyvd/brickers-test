<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brickers
 */

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="icon" href="favicon.ico" type="image/ico">
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <!--  font awesome-->
  <link href="<?php bloginfo('stylesheet_directory');?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Bootstrap styles -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/bootstrap/css/bootstrap.min.css">
  <!--  styles -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/custom.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brickers' ); ?></a>

	<header id="top-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/header-pic.jpg" alt="food" class="img-fluid" />
      </div>
    </div>
    <div class="row">

			<?php
			wp_nav_menu( array(
												'menu-1' 					=> 'Primary',
												'container_class' => 'col-xs-4 d-flex mx-auto',
											 	'container'				=> 'nav',
												'menu_class'			=> 'list-unstyled d-flex ml-auto navigation'
											) );
			?>
    </div>
  </div>
</header>
