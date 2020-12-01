<?php
/* @var $this yii\web\View
 * @var $listDataProvider DataProvider
 *
 */

use yii\bootstrap\Html;
use yii\debug\models\timeline\DataProvider;
use yii\grid\GridView;
use yii\widgets\ListView;

$this->title = 'Авторы';
$this->params['breadcrumbs'][] = ['label' => 'Авторы', 'url' => ['authors/index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<h1>Авторы</h1>

<?= Html::a('Добавить', ['authors/create'], ['class' => 'profile-link btn']) ?>

<?= GridView::widget([
    'dataProvider' => $listDataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'name',
            'label' => 'Имя(Прозвище)',
            'content'=>function($data){
                return Html::a(  $data['name'], ['authors/view', 'id' => $data['id']], ['class' => 'profile-link btn']);
            }
        ],
        [
            'attribute' => 'date_birthday',
            'label' => 'Дата рождения',
            'content'=>function($data){
                return date('d-m-Y', $data['date_birthday']);
            }
        ],
        [
            'attribute' => 'rating',
            'label' => 'Рейтинг',
            'content'=>function($data){
                return $data['rating'];
            }
        ],

    ],
]);
?>

