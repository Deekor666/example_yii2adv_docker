<?php

use frontend\models\Books;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

/** @var Books $model
 * @var array $authors
 *
 */
?>

<div class="news-item">
    <h2><?= Html::encode($model->name) ?></h2>
    <?= $authors[$model->author_id]['name'] ?>
</div>