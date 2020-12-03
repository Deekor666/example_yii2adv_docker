<?php
/* @var $this YiiAlias\web\View
 * @var $listDataProvider DataProvider
 * @var $books array
 */

use Yii as YiiAlias;
use yii\bootstrap\Html;
use yii\debug\models\timeline\DataProvider;
use yii\grid\GridView;
$this->title = 'Авторы';
$this->params['breadcrumbs'][] = ['label' => 'Авторы', 'url' => ['authors/index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<h1>Авторы</h1>

<?= Html::a('Добавить', ['authors/create'], ['class' => 'profile-link btn']) ?>
<?php $defaultEmptyText = 'Авторов не найдено, ' . Html::a('добавить', ['authors/create'])?>
<?= GridView::widget([
    'dataProvider' => $listDataProvider,
    'emptyText' => $defaultEmptyText,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'name',
            'label' => 'Имя(Прозвище)',
            'content'=>function($data){
                return Html::a(  $data->name, ['authors/view', 'id' => $data->id], ['class' => 'profile-link btn']);
            }
        ],
        [
            'attribute' => 'date_birthday',
            'label' => 'Дата рождения',
            'content'=>function($data){
                return YiiAlias::$app->formatter->asDate($data->date_birthday, 'php:d-m-Y');
            }
        ],
        [
            'attribute' => 'rating',
            'label' => 'Рейтинг',
            'content'=>function($data){
                return $data->rating;
            }
        ],
        [
            'attribute' => 'books',
            'label' => 'Книги',
            'content'=>function($data){
                return Html::a('Список книг', ['books/index', 'authorId' => $data->id], ['class' => 'profile-link btn']);
            }
        ],

    ],
]);
?>

