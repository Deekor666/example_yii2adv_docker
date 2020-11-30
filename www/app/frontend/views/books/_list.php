<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="news-item">
    <h2><?= Html::encode($model->name) ?></h2>
    <?php var_dump($authors); ?>
    <?= $authors[$model->author_id]['name'] ?>
</div>