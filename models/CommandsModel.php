<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\UserHackModel;

class CommandsModel extends ActiveRecord
{

    public static function tableName()
    {
        return '{{commands}}';
    }
    public static function getDb()
    {
        // использовать компонент приложения "db2"
        return \Yii::$app->db;
    }

    public static function getHackCommands($id_hack)
    {
        $ids_command =  UserHackModel::getCommandsIdsByHack($id_hack);
        return CommandsModel::find()
                              ->where(['id_command' => $ids_command])
                              ->asArray()
                              ->all();
    }



}
