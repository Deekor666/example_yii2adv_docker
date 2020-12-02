<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Books
 * @var $authors array
 *
 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Книги', 'url' => ['books/index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="books-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'name',
                'label' => 'Название',
                'value'=>function($data){
                    return $data->name;
                }
            ],
            [
                'attribute' => 'author_id',
                'label' => 'Автор',
                'format' => 'raw',
                'value'=>function($data) use ($authors){
                    return Html::a($authors[$data->author_id]['name'], ['authors/view', 'id' => $authors[$data->author_id]['id']], ['class' => 'profile-link btn']);
                }
            ],
            [
                'attribute' => 'date_write',
                'label' => 'Дата рождения',
                'value'=>function($data){
                    return date('d-m-Y', $data->date_write);
                }
            ],
            [
                'attribute' => 'rating',
                'label' => 'Рейтинг',
                'value'=>function($data){
                    return $data->rating;
                }
            ],
        ],
    ]) ?>

</div>
