<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\CommonAsset;

CommonAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<?php
    if (Yii::$app->user->isGuest) {
        ?>
        <div class="ui inverted vertical masthead segment">
            <div class="bg"></div>
            <div class="shadow-bg"></div>
            <div class="container-wrap">
                <div class="ui container">
                    <div class="ui secondary inverted pointing menu">
                        <a class="toc item"><i class="sidebar icon"></i></a>
                        <a href="/" class="item"><i class="ui icon home"></i></a>
                        <a href="/events" class="active item">Мероприятия</a>
                        <a href="/about-us" class="item">О нас</a>
                        <a href="/contacts" class="item">Контакты</a>
                        <div class="right menu">
                            <a href="/sign-in" class="ui inverted blue button">Вход</a>
                            <a href="/sign-up" class="ui inverted green button">Регистрация</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.svg', ['alt' => 'Hackathons University']) .
                '<span class="logo-text">Hackathons University</span>',
            'brandUrl' => '/',
            'brandOptions' => ['class' => 'main-logo'],
            'innerContainerOptions' => ['class' => 'ui container'],
            'options' => [
                'class' => 'navbar-inverse',
            ],
        ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Мероприятия', 'url' => ['/events']],
                    ['label' => 'Экспертам', 'url' => ['/expert/index']],
                    ['label' => 'Задачи', 'url' => ['/client/index']],
                    ['label' => 'Рейтинги', 'url' => ['/score']],
                    ['label' => 'Контакты', 'url' => ['/contact']],
                    ['label' => 'Аккаунт', 'url' => ['/site/profil?id_user='. Yii::$app->user->id]],
                    ['label' => 'Выход (' . Yii::$app->user->identity->username . ')', 'url' => ['/sign/out']],
                ],
            ]);
        NavBar::end();
    }
?>
    <div class="ui container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
