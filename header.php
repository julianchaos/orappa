<?php
/**
 * @package Ndrade
 * @subpackage mauad
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
			
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		
		<!--<meta name="viewport" content="width=device-width" />-->
		
		<!--<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">-->
		<!--<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1">-->

		<?php wp_head() ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	</head>
	<body <?php body_class(); ?>>