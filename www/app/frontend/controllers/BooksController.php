<?php

namespace frontend\controllers;
use frontend\models\Authors;
use frontend\models\Books;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class BooksController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Books::find()
                ->with('author')
                ->indexBy('id'),

            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        $authors = Authors::find()->indexBy('id')->all();
        return $this->render('index', [
            'listDataProvider' => $dataProvider,
            'authors' => $authors
        ]);
    }

    public function actionCreate()
    {
        $model = new Books();
        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            $model->save();
            return $this->redirect(['books/index']);
        }
        $authors = Authors::find()->indexBy('id')->all();
        $items = ArrayHelper::map($authors,'id','name');
        return $this->render('create', [
            'model' => $model,
            'authors' => $items
        ]);
    }

    public function actionView($id)
    {
        $model = Books::findOne($id);
        if ($model === null) {
            throw new NotFoundHttpException;
        }
        $authors = Authors::find()->indexBy('id')->all();

        return $this->render('view', [
            'model' => $model,
            'authors' => $authors
        ]);
    }

    public function actionUpdate($id)
    {
        $book = Books::findOne($id);
        if ($book->load(Yii::$app->request->post())) {
            $book->save();
            $this->redirect(['authors/view', 'id' => $book->id]);
        }
        $authors = Authors::find()->indexBy('id')->all();

        return $this->render('update', [
            'model' => $book,
            'authors' => $authors
        ]);

    }
}
