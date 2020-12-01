<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Authors */

$this->title = 'Добавить Автора';
$this->params['breadcrumbs'][] = ['label' => 'Добавить Автора', 'url' => ['authors/create']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
