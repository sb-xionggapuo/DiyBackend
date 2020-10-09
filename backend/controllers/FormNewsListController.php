<?php


namespace backend\controllers;


use backend\controllers\base\Table;
use yii\web\Controller;

class FormNewsListController extends Table
{
    public function actionIndex(){
        return $this->render('index');
    }
}