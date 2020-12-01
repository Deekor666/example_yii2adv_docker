<?php

namespace frontend\controllers;

use frontend\models\Authors;
use frontend\models\Books;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class AuthorsController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Authors::find()
                ->with('books')
                ->indexBy('id'),

            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        $books = Books::find()->where('id > 0')->orderBy('id')->indexBy('id')->all();
        $this->view->title = 'News List';
        return $this->render('index', ['listDataProvider' => $dataProvider, 'books' => $books]);
    }

    public function actionCreate()
    {
        $model = new Authors();
        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            $model->save();
            return $this->redirect(['authors/index']);
        }
        return $this->render('create', ['model' => $model]);
    }

    public function actionView($id)
    {
        $model = Authors::findOne($id);
        if ($model === null) {
            throw new NotFoundHttpException;
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }


}
