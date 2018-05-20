<?php
/**
    Created By Jinex GSX
    <jinex.gsx@gmail.com>
**/

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\ScoreModel;

class ScoreController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'score';

        $score = ScoreModel::getCurrentScore(1);

        return $this->render('board', [
            'scores' => $score
        ]);
    }
}
