<?php

use yii\helpers\Html;
use app\assets\SignAsset;

SignAsset::register($this);
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
<div class="ui grid fluid sign-page">
    <div class="two column row">
        <div class="column left-part black">
            <div class="sign-bg"></div>
            <div class="shadow-bg"></div>
            <div class="sign-logo">
                <div class="logo-img"></div>
                <div class="logo-text">Hackathon University</div>
                <div class="welcome-text">Построй свою дорогу в будущее!</div>
            </div>
        </div>
        <div class="column right-part">
            <?= $content ?>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
