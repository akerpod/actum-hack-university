<?php
namespace app\models;

use yii\db\ActiveRecord;
use app\models\UserHackModel;
use app\models\User;

class User_info extends ActiveRecord
{

    public static function tableName()
    {
        return '{{user_info}}';
    }

    public static function getUserById($id_user)
    {
        $user_info = User_info::find()
                  ->where(['id_user' => $id_user])
                  ->asArray()
                  ->one();
        $dop = User::find()
                    ->select(['username', 'email'])
                    ->where(['id_user' => $id_user])
                    ->asArray()
                    ->one();
        $user_info = array_merge($user_info, $dop);

        return $user_info;
    }

    public static function getHackUsers($id_hack)
    {
        $ids_user = UserHackModel::getUsersIdsByHack($id_hack);
        $users = User_info::find()
                        ->distinct()
                        ->where(['id_user' => $ids_user])
                        ->asArray()
                        ->all();
        $input = array("red", "black", "olive", "brown", "teal", "red", "violet");
        $rand_keys = array_rand($input, count($users));
        $rand_keys = count($users) == 1? array($rand_keys): $rand_keys;
        foreach ($users as $key => $user) {
            $users[$key]["color"] = $input[$rand_keys[0]];
        }

        return $users;
    }

}
