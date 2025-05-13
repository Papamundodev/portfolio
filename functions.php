<?php

use Theme_base\Base;

if (is_file(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}



$base = new Base('design_pattern', 'design_pattern');

$base->themeSupports();
$base->registerMenus();
$base->includeStyles();
$base->includeScripts();