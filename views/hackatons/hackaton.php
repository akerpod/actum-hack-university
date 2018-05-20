<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = $hack->name;

?>

<div class="site-index">
    <?php if(Yii::$app->user->isGuest){ ?>
      <div class="jumbotron">
          <h1>Хакатоны</h1>
          <p class="lead">Хотите ли вы принять участие в ХАКАТОНАХ по всей России</p>
          <p><a class="btn btn-lg btn-success" href="<?=Url::toRoute(['site/login']);?>">Не теряйте время и присоединяйтесь</a></p>
      </div>
    <?php } else {?>

    <div style="color:#FFF;" class=" ui center aligned container">
      <h1 class="hack-title"><?=$hack->name?></h1>

        <div class="your-clock text-center" style="width: auto; margin: 0 auto; display: table;"></div>

        <button class="hack-play massive ui button positive">Учавствовать</button>
        <hr>
    </div>
              <div class="ui top attached tabular menu hack-font-size">
                <a class="item active" style="color: #0091ff;"  data-tab="first"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Описание </font></font></a>
                <a class="item" style="color: #0091ff;" data-tab="second"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Команды</font></font></a>
                <a class="item" style="color: #0091ff;" data-tab="third"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Задачи</font></font></a>
              </div>
              <div class=" hack-font-size ui bottom attached tab segment active" data-tab="first"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    <div class="ui message hack-description">
                      <div class="header">
                          О Хакатоне:

                      </div>
                      <p><?=$hack->description?></p>
                    </div>
              </font></font></div>
              <div class="hack-font-size ui bottom attached tab segment" data-tab="second"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <table class="ui celled padded table">
                        <thead>
                          <tr><th class="single line">Место в рейтинге</th>
                          <th>Название команды</th>
                          <th>Дата регистрации</th>
                          <th>Рэйтинг</th>
                          <!-- <th>Участники</th> -->
                        </tr></thead>
                        <tbody>
                      <?php foreach ($commands as  $command) {?>
                          <tr>
                            <td class="collapsing">
                              <h2 class="ui center aligned header"><?=$command['rating']?></h2>
                            </td>
                            <td class="single line">
                              <?=$command['name']?>
                            </td>
                            <td class="single line">
                                <p><?php Yii::$app->formatter->locale = 'ru-RU';?>
                                <?=Yii::$app->formatter->asDate($command['date_of_formation']);?></p>
                            </td>
                            <td class="right aligned">
                              <?=$command['score']?> <br>
                              <a href="#">7 studies</a>
                            </td>
                            <!-- <td>
                                <?php foreach ($users as $user) {?>
                                    <a href="<?=Url::toRoute(['site/profil']);?>" class="ui link button <?=$user['color']?>"><?=$user['name']?></a>

                                <?php }?>
                            </td> -->
                          </tr>
                        <?php } ?>
                        </tbody>
                        </table>
              </font></font></div>
              <div class="hack-font-size ui bottom attached tab segment" data-tab="third"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      <div class="row">
                      <?php foreach ($cases as  $case) {?>
                          <div class="col-sm-6">
                            <div class="card card-block">
                              <h3 class="card-title"><?=$case->company?></h3>
                              <p class="card-text"><?=$case->description?></p>
                              <a href="<?=$case->linc?>" class="btn btn-primary">Перейти к документу</a>
                            </div>
                          </div>
                    <?php }?>
                    </div>
              </font></font></div>
<?php }?>
<script type="text/javascript">


    var hack_time = <?=json_encode($hack->date)?>
</script>
