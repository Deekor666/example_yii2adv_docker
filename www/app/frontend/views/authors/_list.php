<?php

use frontend\models\Authors;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

/** @var Authors $model
 * @var array $books
 *
 */
?>

<div class="news-item">
    <h2><?= Html::encode($model->name) ?></h2>
</div>