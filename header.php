<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>   
    <meta name="description" content="<?= get_the_excerpt() ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<?php
if (function_exists('wp_body_open')){
    wp_body_open() ;
}
?>