<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = $hack->name;

?>
<div class="ui huge header inverted headpage"><?= $this->title ?></div>
<div class="ui link three cards event-cards">
        <?php foreach ($commands as $command) {?>

                  <div class="ui link card">
                  <div class="content">
                    <div class="header"><?=$command['name']?></div>
                    <div class="meta">
                      <span class="category"><?php echo (rand()%4 + 1);?> чекпоинт завершен</span>
                    </div>
                    <div class="description">
                      <div class="">
                         18 мая 2018г. 15:03
                      </div>
                    </div>
                  </div>
                  <div class="extra content">
                    <p>
                      <div class="ui labeled button" tabindex="0">
                      <div class="ui red button">
                        <i class="heart icon"></i>
                      </div>
                      <a href="<?=Url::toRoute(['site/about', 'id_command' => $command['id_command'], 'checkpoint' => '3', 'id_hack' => $hack->id_hack]);?>" class="ui basic red left pointing label">
                        Перейти к оцениванию
                      </a>
                      </div>
                    </p>
                    <p>
                      <div class="ui labeled button" tabindex="0">
                        <div class="ui basic blue button">
                          <i class="fork icon"></i>
                        </div>
                        <a href="https://github.com/" class="ui basic left pointing blue label">
                          Project GitHub
                        </a>
                      </div>
                    </p>

                  </div>
                </div>

        <?php }?>

</di>
