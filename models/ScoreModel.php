<?php
namespace app\models;

use yii\db\ActiveRecord;
use app\models\User;
use app\models\User_info;
use app\models\CommandsModel;

class ScoreModel extends ActiveRecord
{
    public static function getCurrentScore($id_hack)
    {
        return ScoreModel::getDb()->createCommand('SELECT * FROM score_table s, commands c WHERE s.id_hack = '. $id_hack .' AND c.id_command = s.id_command ORDER by total_score DESC')->queryAll();
    }


    //
    // public static function tableName()
    // {
    //     return '{{hacatons}}';
    // }
    // public static function getDb()
    // {
    //     // использовать компонент приложения "db2"
    //     return \Yii::$app->db;
    // }
    //
    // public static function getAllHackatons()
    // {
    //   $hackatons  = HackatonsModel::getDb()->createCommand('SELECT h.*, COUNT(c.id_case) as countCases  FROM hacatons h
    //                                                         LEFT JOIN cases c ON c.id_hack=h.id_hack
    //                                                         GROUP BY h.id_hack')->queryAll();
    //   $users =  HackatonsModel::getDb()->createCommand('SELECT uh.id_hack, COUNT(DISTINCT uh.id_user) AS countUsers FROM user_hack uh GROUP BY uh.id_hack')->queryAll();
    //   $commands = HackatonsModel::getDb()->createCommand('SELECT uh.id_hack, COUNT( uh.id_command) AS countCommands FROM user_hack uh  GROUP BY uh.id_hack')->queryAll();
    //   $result = [];
    //   foreach ($hackatons as $key => $hackaton) {
    //     $hackaton['users'] = $users[$key]['countUsers'];
    //     $hackaton['commands'] = $commands[$key]['countCommands'];
    //     $result[] = $hackaton;
    //   }
    //   return $result;
    // }
    //
    // public static function getOneHackaton($id_hack)
    // {
    //   $result = HackatonsModel::find()
    //                 ->where(['id_hack' => $id_hack])
    //                 ->one();
    //   return $result;
    // }




}
