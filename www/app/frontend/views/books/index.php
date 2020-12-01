<?php
/* @var $this yii\web\View
 * @var $listDataProvider DataProvider
 * @var $authors array
 *
 */

use yii\bootstrap\Html;
use yii\debug\models\timeline\DataProvider;
use yii\widgets\ListView;

$this->title = 'Книги';
$this->params['breadcrumbs'][] = ['label' => 'Книги', 'url' => ['books/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Список книг</h1>
<?= Html::a('Добавить', ['books/create'], ['class' => 'profile-link btn']) ?>

<?= ListView::widget([
    'dataProvider' => $listDataProvider,
    'itemView' => '_list',
    'viewParams' => ['authors' => $authors]
]);
?>