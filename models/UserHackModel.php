<?php
namespace app\models;

use yii\db\ActiveRecord;


class UserHackModel extends ActiveRecord
{

    public static function tableName()
    {
        return '{{user_hack}}';
    }
    public static function getDb()
    {
        // использовать компонент приложения "db2"
        return \Yii::$app->db;
    }

    public static function getUsersIdsByHack($id_hack)
    {
      $users = UserHackModel::getDb()->createCommand('SELECT distinct uh.id_user FROM user_hack uh WHERE uh.id_hack='.$id_hack)->queryAll();
      $ids_users = [];
      
      foreach ($users as  $user) {
        $ids_users[] = $user['id_user'];
      }
      return $ids_users;
    }

    public static function getCommandsIdsByHack($id_hack)
    {
      $commands = UserHackModel::getDb()->createCommand('SELECT distinct uh.id_command FROM user_hack uh WHERE uh.id_command IS NOT NULL and uh.id_hack='.$id_hack)->queryAll();

      $ids_command = [];
      foreach ($commands as  $command) {
        $ids_command[] = $command['id_command'];
      }

      return $ids_command;
    }



}
