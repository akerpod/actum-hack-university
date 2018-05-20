<?php
namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

class SignUp extends Model
{
    public $firstname;
    public $lastname;
    public $username;
    public $email;
    public $password;
    public $password_repeat;

    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'trim'],
            [['firstname', 'lastname'], 'required'],
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такое логин уже занят.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такая почта уже занята.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' =>
                'Пароли не совпадают'],
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->firstname = $this->firstname;
        $user->lastname = $this->lastname;
        $user->username = $this->username;
        $user->email = $this->email;

        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }
}
