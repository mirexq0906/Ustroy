<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/slick.css',
        'css/slick-theme.css',
        'css/fm.revealator.jquery.min.css',
    ];
    public $js = [
        'js/fm.revealator.jquery.min.js',
        'js/slick.min.js',
        'js/main.js',
        'js/scroll.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
