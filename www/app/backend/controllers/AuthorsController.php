<?php

namespace backend\controllers;

class AuthorsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
