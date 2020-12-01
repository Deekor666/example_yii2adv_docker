<?php

namespace frontend\controllers;
use frontend\models\Authors;
use frontend\models\Books;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

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
        $authors = Authors::find()->where('id is not null')->orderBy('id')->indexBy('id')->asArray()->all();
        $this->view->title = 'News List';
        return $this->render('index', ['listDataProvider' => $dataProvider, 'authors' => $authors]);
    }

    public function actionCreate()
    {
        $model = new Books();
        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            $model->save();
            return $this->redirect(['books/index']);
        }
        return $this->render('create', ['model' => $model]);
    }

}
