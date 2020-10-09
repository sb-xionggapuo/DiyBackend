<?php


namespace backend\controllers;


use yii\web\Controller;

class TableImageController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}