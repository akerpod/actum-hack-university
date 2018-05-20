<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\ClientsScoringModel;

class ClientController extends Controller
{
    public function actionIndex()
    {
    //    $model = new ClientsScoringModel();
        return $this->render('client');
    }

}
