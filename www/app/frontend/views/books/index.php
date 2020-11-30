<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\widgets\ListView;

?>
<h1>Список книг</h1>
<?= Html::a('Добавить', ['books/create'], ['class' => 'profile-link btn']) ?>

<?= ListView::widget([
'dataProvider' => $listDataProvider,
'itemView' => '_list',
]);
?>