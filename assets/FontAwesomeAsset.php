<?php
/**
    Created By Jinex GSX
    <jinex.gsx@gmail.com>
**/

namespace app\assets;

use yii\web\AssetBundle;

 class FontAwesomeAsset extends AssetBundle
 {
     public $sourcePath = '@vendor/bower-asset/font-awesome/web-fonts-with-css/css';
     public $css = [
         'fa-regular.css',
         'fontawesome.min.css',
     ];
 }
