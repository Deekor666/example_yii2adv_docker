<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Books */

$this->title = 'Добавить книгу';
$this->params['breadcrumbs'][] = ['label' => 'Добавить книгу', 'url' => ['books/create']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
