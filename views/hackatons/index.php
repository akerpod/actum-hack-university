<?php
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Мероприятия';
?>
<div class="ui huge header inverted headpage"><?= $this->title ?></div>
<div class="ui link three cards event-cards">
    <?php foreach ($hackatons as $hackaton) {?>
    <a href="<?= Url::toRoute([(!Yii::$app->user->isGuest ? '/hackatons/one?id_hack='.$hackaton['id_hack'] : '/sign-in')]) ?>" class="card inverted" id_case="<?=$hackaton['id_hack']?>">
        <div class="image">
            <?= Html::img("@web/$hackaton[img]", ['alt' => 'Наш логотип', 'width' => '200']) ?>
        </div>
        <div class="content">
            <div class="header"><?=$hackaton['name'] ?></div>
            <div class="meta"><?=$hackaton['city'] ?></div>
            <div class="description"><?=$hackaton['description'] ?></div>
        </div>
        <div class="extra content">
            <span class="right floated"><?=Yii::$app->formatter->asDate($hackaton['date']);?></span>
            <span class="keys" title="Кейсов"><i class="tasks icon"></i><?=$hackaton['countCases']?></span>
            <span class="members" title="Количество участников"><i class="user icon"></i><?=$hackaton['users']?></span>
            <span title="Количество комманд"><i class="users icon"></i><?=$hackaton['commands']?></span>
        </div>
    </a>
   <?php } ?>
</div>
