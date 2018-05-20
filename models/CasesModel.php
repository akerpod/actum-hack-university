<?php
namespace app\models;

use yii\db\ActiveRecord;

class CasesModel extends ActiveRecord
{

    public static function tableName()
    {
        return '{{cases}}';
    }
    public static function getDb()
    {
        // использовать компонент приложения "db2"
        return \Yii::$app->db;
    }

    public static function getHackCases($id_hack)
    {
      $cases = CasesModel::find()
                          ->where(['id_hack' =>  $id_hack])
                          ->all();
      return $cases;
    }



}
