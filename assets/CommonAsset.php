<?php
/**
    Created By Jinex GSX
    <jinex.gsx@gmail.com>
**/

namespace app\assets;

use yii\web\AssetBundle;

class CommonAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/common.css',
        'css/flipclock.css',
        'css/hackatons.css',
    ];
    public $js = [
      'js/flipclock.min.js',
      'js/timer.js',
      'js/hack-tabs.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'app\assets\FontAwesomeAsset',
        'Zelenin\yii\SemanticUI\assets\SemanticUICSSAsset',
        'Zelenin\yii\SemanticUI\assets\SemanticUIJSAsset'
    ];
}
