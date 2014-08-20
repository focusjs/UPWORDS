<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	<link rel="stylesheet" id="3420-css" href="<?php echo get_template_directory_uri(); ?>/fonts/3420.css" type="text/css" media="all">
	<script src="<?php echo get_template_directory_uri(); ?>/js/upwords-base.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/myriad-pro.cufonfonts.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('.myriad-pro-regular', { fontFamily: 'Myriad Pro Regular', hover: true }); 
		Cufon.replace('.myriad-pro-condensed', { fontFamily: 'Myriad Pro Condensed', hover: true }); 
		Cufon.replace('.myriad-pro-semibold-italic', { fontFamily: 'Myriad Pro Semibold Italic', hover: true }); 
		Cufon.replace('.myriad-pro-semibold', { fontFamily: 'Myriad Pro Semibold', hover: true }); 
		Cufon.replace('.myriad-pro-condensed-italic', { fontFamily: 'Myriad Pro Condensed Italic', hover: true }); 
		Cufon.replace('.myriad-pro-bold-italic', { fontFamily: 'Myriad Pro Bold Italic', hover: true }); 
		Cufon.replace('.myriad-pro-bold-condensed-italic', { fontFamily: 'Myriad Pro Bold Condensed Italic', hover: true }); 
		Cufon.replace('.myriad-pro-bold-condensed', { fontFamily: 'Myriad Pro Bold Condensed', hover: true }); 
		Cufon.replace('.myriad-pro-bold', { fontFamily: 'Myriad Pro Bold', hover: true });
		//
		window.template_uri = '<?php echo get_template_directory_uri(); ?>';
		window.site_uri = '<?php echo get_site_url();?>';
	</script>
</head>
<?php 
$main_banner = is_main_banner();
$bodyId = ($main_banner  === true) ? 'main-body' : 'sub-body';

?>
<body id="<?php echo $bodyId; ?>" <?php body_class(); ?>>
<div class="control-backgound">
	<div id="page" class="hfeed site page-body">
		<?php get_banner(); ?>
		
		<div id="main" class="site-main main-template">
