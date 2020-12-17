<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package santiagogomezl
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/assets/img/santiagogomez-logo.png">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
            
    <header>
    	<div class="site-header">
            <div class="branding">
                <h1><a href="http://santiagogomezl.com">Santiago Gomez</a></h1>
            </div><!-- branding -->
            
            <div class="toggle-menu">
            	<div class="box-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div><!-- toggle-menu -->
            
            <nav class="main-menu">
            	<ul>
                    <li><a id="portfolio-link">PORTFOLIO</a></li>
                    <li><a id="about-link">ABOUT ME</a></li>
                    <li><a id="contact-link">CONTACT</a></li>
                    <!--<li><a id="blog-link"><em>Blog</em></a></li>-->
                </ul>
            </nav><!-- main-menu -->
        </div><!-- site-header-->
    </header>
