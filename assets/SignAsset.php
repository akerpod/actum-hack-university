<?php
/**
    Created By Jinex GSX
    <jinex.gsx@gmail.com>
**/

namespace app\assets;

use yii\web\AssetBundle;

class SignAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = ['css/sign.css'];
    public $js = [];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'app\assets\FontAwesomeAsset',
        'Zelenin\yii\SemanticUI\assets\SemanticUICSSAsset'
    ];
}
