<?php
/**
    Created By Jinex GSX
    <jinex.gsx@gmail.com>
**/

namespace app\assets;

use yii\web\AssetBundle;

class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = ['css/home.css'];
    public $js = [];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'app\assets\FontAwesomeAsset',
        'Zelenin\yii\SemanticUI\assets\SemanticUICSSAsset',
        'Zelenin\yii\SemanticUI\assets\SemanticUIJSAsset'
    ];
}
