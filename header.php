<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>   
    <meta name="description" content="<?= get_the_excerpt() ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
    <?php wp_head(); ?>
</head>
<body <?php body_class('header-fixed') ?>>
<?php
if (function_exists('wp_body_open')){
    wp_body_open();
}
?>

<header class="">
    <div>
        <div class="img-container-circle-logo-sm">
            <a href="<?=home_url();?>" aria-label="<?=get_bloginfo('name');?>">
                <img src="<?=get_template_directory_uri();?>/assets/images/logo.jpg" title="logo" alt="logo">
            </a>
        </div>
    </div>
    <div class="">
        <?php get_template_part('partials/molecules/navbar-desktop', null, ['theme_location' => 'header']); ?>
        <?php get_template_part('partials/molecules/navbar-mobile', null, ['theme_location' => 'header']); ?>
    </div>
    <div class="flex-end">
        <?php if (function_exists('aas_open_search_form')): ?>
            <div class="wrapper-open-search">
                <?=do_shortcode('[aas_open_search]'); ?>
            </div>
        <?php endif; ?>
        <?php if (function_exists('theme_light_dark_form')): ?>
            <div class="wrapper-theme-light-dark">
                <?=do_shortcode('[theme_light_dark]'); ?>
            </div>
        <?php endif; ?>
        <button class="burger-menu" popovertarget="navmenu-header-mobile" id="theme-navbar-toggler">
            <span class="custom-burger"></span>
            <span class="custom-burger"></span>
            <span class="custom-burger"></span>
            <span class="custom-burger"></span>
        </button>
    </div>
</header>
