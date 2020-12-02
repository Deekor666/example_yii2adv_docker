<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Authors */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Авторы', 'url' => ['authors/index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="authors-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Уверены, что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'name',
                'label' => 'Имя(Прозвище)',
                'value'=>function($data){
                    return $data->name;
                }
            ],
            [
                'attribute' => 'date_birthday',
                'label' => 'Дата рождения',
                'value'=>function($data){
                    return date('d-m-Y', $data->date_birthday);
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
