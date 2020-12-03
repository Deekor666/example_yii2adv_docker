<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Books
 * @var $authors array
 */

$this->title = 'Добавить книгу';
$this->params['breadcrumbs'][] = ['label' => 'Добавить книгу', 'url' => ['books/create']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'authors' => $authors
    ]) ?>

</div>
