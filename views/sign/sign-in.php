<?php
/**
    Created By Jinex GSX
    <jinex.gsx@gmail.com>
**/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Вход';
?>
<a href="/" class="sign-back" title="Вернуться к странице входа">
    <i class="inverted arrow large left icon"></i>
</a>
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => '{input}',
        'options' => ['class' => 'field'],
    ],
    'options' => [
        'class' => 'ui form sign-in',
    ]
]); ?>
    <h2 class="ui center inverted aligned header"><?= Html::encode($this->title) ?></h2>
    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Никнейм или почта']) ?>
    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль']) ?>
    <div class="two fields">
        <div class="field">
            <?= Html::a('Регистрация', ['/sign-up'], ['class' => 'ui submit fluid inverted green button']) ?>
        </div>
        <div class="field">
            <?= Html::submitButton('Войти', ['class' => 'ui submit inverted fluid blue button', 'name' => 'login-button']) ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>
