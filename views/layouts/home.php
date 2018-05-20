<?php

use yii\helpers\Html;
use app\assets\HomeAsset;

HomeAsset::register($this);
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
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a href="/" class="active item">Главная</a>
    <a href="/events" class="item">Мероприятия</a>
    <a href="/about-us" class="item">О нас</a>
    <a href="/contacts" class="item">Контакты</a>
    <div class="right menu">
      <div class="item">
        <a herf="/sign-in" class="ui blue button">Вход</a>
      </div>
      <div class="item">
        <a herf="/sign-up" class="ui green button">Регистрация</a>
      </div>
    </div>
  </div>
</div>
<div class="ui vertical inverted sidebar menu">
  <a href="/" class="active item">Главная</a>
  <a href="/events" class="item">Мероприятия</a>
  <a href="/about-us" class="item">О нас</a>
  <a href="/contacts" class="item">Контакты</a>
  <a herf="/sign-in" class="item">Вход</a>
  <a herf="/sign-up" class="item">Регистрация</a>
</div>
<?= $content ?>
<?php $this->endBody() ?>
<script>
    $(function() {
        $('.masthead').css('min-height', $(window).height());

        // fix menu when passed
        $('.masthead')
          .visibility({
            once: false,
            onBottomPassed: function() {
              $('.fixed.menu').transition('fade in');
            },
            onBottomPassedReverse: function() {
              $('.fixed.menu').transition('fade out');
            }
          })
        ;
        // create sidebar and attach to menu open
        $('.ui.sidebar')
          .sidebar('attach events', '.toc.item')
        ;
      });
</script>
</body>
</html>
<?php $this->endPage() ?>
