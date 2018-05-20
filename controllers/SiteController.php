<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\ProfilForm;
use app\models\User;
use \yii\web\HttpException;
use app\models\User_info;
use  app\models\ScoreTable;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

	 public function beforeAction($action)
    {
        if (in_array($action->id, ['obrabot'])) {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionProfil($id_user){
        if(empty($id_user) || !is_numeric($id_user)){
           throw new HttpException(404 ,'User not found');
        }

        $user_info = User_info::getUserById($id_user);
        return $this->render('profil', [
            'user_info' => $user_info,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionRegist()
    {
        $model = new Regist();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = new User();
            $user ->username = $model->username;
            $user ->email = $model->email;
            $user->save();
            return $this->render('index');
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('entry', ['model' => $model]);
        }
    }


    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    $user_info = new User_info();
                    $user_info->id_user = Yii::$app->user->id ;
                    $user_info->save();
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionObrabot()
    {
            $score = ScoreTable::find()
            ->where(["id_command"=>Yii::$app->request->post('id_command')])
            ->one();

        if (!empty($score)){
            $score->total_programing =  $score->total_programing + Yii::$app->request->post('total_programing');
            $score->checkpoint = Yii::$app->request->post('checkpoint');
            $score->total_biz =  $score->total_biz + Yii::$app->request->post('total_biz');
            $score->total_des =  $score->total_des + Yii::$app->request->post('total_des');
            $score->total_score =  $score->total_score + Yii::$app->request->post('total_score');
            $score->save();
        }
        else {
            $score = new ScoreTable();
            $score->id_hack = Yii::$app->request->post('id_hack');
            $score->id_command = Yii::$app->request->post('id_command');
            $score->checkpoint = Yii::$app->request->post('checkpoint');
            $score->total_programing = Yii::$app->request->post('total_programing');
            $score->total_biz =Yii::$app->request->post('total_biz');
            $score->total_des = Yii::$app->request->post('total_des');
            $score->total_score =Yii::$app->request->post('total_score');
            $score->save();
        }
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
