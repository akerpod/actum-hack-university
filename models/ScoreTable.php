<?php
namespace app\models;

use yii\db\ActiveRecord;


class ScoreTable extends ActiveRecord
{

    public static function tableName()
    {
        return '{{score_table}}';
    }

    

}
