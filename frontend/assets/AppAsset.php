<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/new.css',
        'css/chocolat.css',
        'css/style.css',
    ];
    public $js = [
    'js/jquery.chocolat.js',
    'js/move-top.js',
    'js/responsiveslides.min.js',
    'js/easing.js',
    'js/modernizr.custom.97074.js',
    'js/jquery-1.11.0.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
