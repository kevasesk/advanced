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
        'css/simple-line-icons.css',
        'css/style.css'
    ];
    public $js = [
        'js/jquery.tabs.js',
        'js/main.js',
        'js/hamburger.js',
        'js/jquery.tabs.js',
       // 'js/tabs.js',
        'js/big-tabs.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
