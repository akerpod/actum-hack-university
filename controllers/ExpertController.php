<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\HackatonsModel;
use app\models\CommandsModel;
use app\models\CasesModel;
use app\models\User_info;
use \yii\web\HttpException;

class ExpertController extends Controller
{
    public function actionIndex()
    {
        $hacks = HackatonsModel::getCurrentHackatons();
        return $this->render('expert-board', [
            'hackatons' => $hacks,
        ]);
    }
    public function actionBoard($id_hack)
    {
      if(empty($id_hack) || !is_numeric($id_hack)){
         throw new HttpException(404 ,'User not found');
      }
      $hack = HackatonsModel::getOneHackaton($id_hack);

      $commands = CommandsModel::getHackCommands($id_hack);
      $cases = CasesModel::getHackCases($id_hack);
      return $this->render('hackaton', [
          'hack' => $hack,

          'commands' => $commands,
      ]);
    }


    public function actionHelloWorld()
    {
        return 'Hello World';
    }
}
