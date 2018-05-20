<?php
/**
    Created By Jinex GSX
    <jinex.gsx@gmail.com>
**/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Регистрация';
?>
<a href="/sign-in" class="sign-back" title="Вернуться к странице входа">
    <i class="inverted arrow large left icon"></i>
</a>
<?php $form = ActiveForm::begin([
    'id' => 'form-signup',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => '{input}',
        'options' => ['class' => 'field'],
    ],
    'options' => [
        'class' => 'ui form sign-up',
    ]
]); ?>
    <h2 class="ui center inverted aligned header"><?= Html::encode($this->title) ?></h2>
    <?= $form->field($model, 'firstname')->textInput(['autofocus' => true, 'placeholder' => 'Имя']) ?>
    <?= $form->field($model, 'lastname')->textInput(['placeholder' => 'Фамилия']) ?>
    <?= $form->field($model, 'username')->textInput(['placeholder' => 'Никнейм']) ?>
    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Почта']) ?>
    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Придумай пароль']) ?>
    <?= $form->field($model, 'password_repeat')->passwordInput(['placeholder' => 'Повтори пароль']) ?>
    <?= Html::submitButton('Зарегистрироваться', ['class' => 'ui submit fluid inverted green button', 'name' => 'signup-button']) ?>
<?php ActiveForm::end(); ?>
