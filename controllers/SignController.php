<?php
/**
    Created By Jinex GSX
    <jinex.gsx@gmail.com>
**/

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

use app\models\SignUp;
use app\models\SignIn;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class SignController extends Controller
{
    public function actionIn()
    {
        $this->layout = 'sign';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new SignIn();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('sign-in', [
            'model' => $model,
        ]);
    }

    public function actionUp()
    {
        $this->layout = 'sign';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new SignUp();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('sign-up', [
            'model' => $model
        ]);
    }

    public function actionOut()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
