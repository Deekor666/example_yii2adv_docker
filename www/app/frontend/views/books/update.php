<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Books
 * @var $authors array
 */

$this->title = 'Изменить книгу: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Книги', 'url' => ['books/index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'authors' => $authors
    ]) ?>

</div>
