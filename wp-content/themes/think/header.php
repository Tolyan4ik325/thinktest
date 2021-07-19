<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package think
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>

</head>
<body>
<div id="menu-toggle" class="menu col-md-6 text-right" <?php if(is_admin_bar_showing()) { ?> style="top: 62px" <?php }  ?>>
</div>
<nav class="navbar">
    <div class="right-bar">
        <div class="menu">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'my-custom-menu',
                    'container_class' => 'custom-menu-class' ) );
                ?>
        </div>
        <ul class="flex">
            <li>
                <a href="">
                    <img src="/wp-content/themes/think/images/social-media/FB.svg" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/wp-content/themes/think/images/social-media/IN.svg" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/wp-content/themes/think/images/social-media/TW.svg" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/wp-content/themes/think/images/social-media/BE.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
</nav>
<!--Header item-->
<div id="header">
    <div class="container">
        <div class="row header pt-4">
            <div class="logo col-md-6">
                <img src="/wp-content/themes/think/images/think-logo-white.svg" alt="">
            </div>
        </div>
    </div>
</div>


