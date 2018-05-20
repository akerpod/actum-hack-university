<?php
/**
    Created By Jinex GSX
    <jinex.gsx@gmail.com>
**/

use yii\helpers\Url;

$this->title = 'Результаты';
?>
<div style="padding: 80px">
<table class="ui celled striped inverted large table">
    <thead>
        <tr>
            <th colspan="7">
                <h2 class="ui header center aligned inverted">Рейтинг команд</h2>
            </th>
        </tr>
        <tr>
            <th>#</th>
            <th>Комманда</th>
            <th class="collapsing">№ чекпоинта</th>
            <th class="collapsing">Маркетинг</th>
            <th class="collapsing">Программирование</th>
            <th class="collapsing">Дизайн</th>
            <th class="collapsing">Общий балл</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($scores as $index => $score) { ?>
            <tr>
                <td class="collapsing">
                    <?php
                        if (($index + 1) < 4) {

                            $color = (($index + 1) < 3 ? (($index + 1) < 2 ? 'green' : 'blue') : 'red') . ' ';
                    ?>
                        <div class="ui ribbon large <?= $color ?>label"><?= ($index + 1) ?></div>
                    <?php } else { ?>
                        <?= ($index + 1) ?>
                    <?php } ?>
                </td>
                <td>
                    <h3 class="ui image inverted header">
                        <i class="ui mini rounded users icon"></i>
                        <div class="content"><?= $score['name'] ?></div>
                    </h3s>
                </td>
                <td class="collapsing">
                    <h1 class="ui inverted header center aligned"><?= $score['checkpoint'] ?></h1>
                </td>
                <td class="collapsing">
                    <h1 class="ui inverted header center aligned"><?= $score['total_biz'] ?></h1>
                </td>
                <td class="collapsing">
                    <h1 class="ui inverted header center aligned"><?= $score['total_programing'] ?></h1>
                </td>
                <td class="collapsing">
                    <h1 class="ui inverted header center aligned"><?= $score['total_des'] ?></h1>
                </td>
                <td class="collapsing">
                    <h1 class="ui inverted header center aligned"><?= $score['total_score'] ?></h1>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
