<?php
/* @var $this YiiAlias\web\View
 * @var $listDataProvider DataProvider
 * @var $authors array
 *
 */
use Yii as YiiAlias;
use yii\bootstrap\Html;
use yii\debug\models\timeline\DataProvider;
use yii\grid\GridView;

$this->title = 'Книги';
$this->params['breadcrumbs'][] = ['label' => 'Книги', 'url' => ['books/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Список книг</h1>

<?= Html::a('Добавить', ['books/create'], ['class' => 'profile-link btn']) ?>
<?php $defaultEmptyText = 'Книг не найдено, ' . Html::a('добавить', ['books/create'])?>
<?= GridView::widget([
    'dataProvider' => $listDataProvider,
    'emptyText' => $defaultEmptyText,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'name',
            'label' => 'Название',
            'content'=>function($data){
                return Html::a($data->name, ['books/view', 'id' => $data->id], ['class' => 'profile-link btn']);
            }
        ],
        [
            'attribute' => 'author_id',
            'label' => 'Автор',
            'content'=>function($data) use ($authors){
                return Html::a($authors[$data->author_id]['name'], ['authors/view', 'id' => $authors[$data->author_id]['id']], ['class' => 'profile-link btn']);
            }
        ],
        [
            'attribute' => 'date_write',
            'label' => 'Дата рождения',
            'content'=>function($data){
                return YiiAlias::$app->formatter->asDate($data->date_write, 'php:d-m-Y');
            }
        ],
        [
            'attribute' => 'rating',
            'label' => 'Рейтинг',
            'content'=>function($data){
                return $data->rating;
            }
        ],

    ],
]);

