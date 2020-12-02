<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Authors */

$this->title = 'Изменить автора: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Авторы', 'url' => ['authors/index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="authors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
