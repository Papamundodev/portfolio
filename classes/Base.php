<?php

namespace Theme_base;
    
class Base
{
    private string $theme_name;
    private string $theme_slug; 

    public function __construct(string $theme_name, string $theme_slug)
    {
        $this->theme_name = $theme_name;
        $this->theme_slug = $theme_slug;
    }

    public function includeStyles() : void
    {
        add_action('wp_enqueue_scripts', function () {
            wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], null);
        });
    }   

    public function includeScripts() : void
    {
        add_action('wp_enqueue_scripts', function () {
            wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
            wp_enqueue_script('main');
        });
    }

    public function themeSupports() : void
    {
        add_action('after_setup_theme', function () {
            // Menus
            add_theme_support('menus');
            add_theme_support('post-thumbnails');
            add_theme_support('title-tag');
            add_post_type_support('page', 'excerpt');
            // Enables post and comment RSS feed links to head
            add_theme_support('automatic-feed-links');
            // I18N
            load_theme_textdomain('theme_base', get_template_directory() . '/languages');
            // Activer le lazy loading natif
            add_theme_support('lazy-loading-images');
            // Ajouter des tailles d'images optimisées
            add_image_size('icon_small', 32, 32, true);  // Pour les miniatures très petites
            add_image_size('icon', 48, 48, true);  // Pour les miniatures très petites
            add_image_size('mobile', 576, '', true); // Pour les mobiles
            add_image_size('tablet', 768, '', true); // Pour les tablettes
            add_image_size('medium', 992, '', true); // Medium 
            add_image_size('large', 1200, '', true); // Large 

        }, 99);
    }

    public function registerMenus() : void
    {
        register_nav_menus([
            'header' => __('Header', 'theme_base'),
            'footer' => __('Footer', 'theme_base'),
        ]);
    }

    public function allowSVGUploads() :void
    {
        add_action('init', function () {

            add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
                global $wp_version;
                if ($wp_version !== '4.7.1') {
                    return $data;
                }

                $filetype = wp_check_filetype($filename, $mimes);

                return [
                    'ext'             => $filetype['ext'],
                    'type'            => $filetype['type'],
                    'proper_filename' => $data['proper_filename']
                ];
            }, 10, 4);

        });

    }

    public function addSVGSupport() :void
    {
        add_action('init', function () {

            add_filter('upload_mimes', function ($mimes) {
                $mimes['svg'] = 'image/svg+xml';

                return $mimes;
            });

        });

    }

}