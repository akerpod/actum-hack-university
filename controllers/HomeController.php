<?php
/**
    Created By Jinex GSX
    <jinex.gsx@gmail.com>
**/

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class HomeController extends Controller
{
    public function actionIndex()
    {
        //if (Yii::$app->user->isGuest) {
            $this->layout = 'home';

            return $this->render('index');
        //}

         //return Yii::$app->response->redirect(['/events']);
    }
}
