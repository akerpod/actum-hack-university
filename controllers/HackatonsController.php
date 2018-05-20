<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\HackatonsModel;
use app\models\CommandsModel;
use app\models\CasesModel;
use app\models\User_info;
use \yii\web\HttpException;

class HackatonsController extends Controller
{
    public function actionIndex()
    {
        $hackatons = HackatonsModel::getAllHackatons();
        return $this->render('index', [
            'hackatons' => $hackatons,
        ]);
    }
    public function actionOne($id_hack)
    {
      if(empty($id_hack) || !is_numeric($id_hack)){
         throw new HttpException(404 ,'User not found');
      }
      $hack = HackatonsModel::getOneHackaton($id_hack);
      $users = User_info::getHackUsers($id_hack);
      $commands = CommandsModel::getHackCommands($id_hack);
      $cases = CasesModel::getHackCases($id_hack);
      //var_dump($users);
      //
      // foreach ($commands as $key => $command) {
      //     $command =
      // }
      return $this->render('hackaton', [
          'hack' => $hack,
          'users' => $users,
          'commands' => $commands,
          'cases' => $cases,
      ]);
    }


    public function actionHelloWorld()
    {
        return 'Hello World';
    }
}
