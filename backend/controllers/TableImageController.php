<?php


namespace backend\controllers;


use backend\controllers\base\Table;
use yii\web\Controller;

class TableImageController extends Table
{
    public $layout = "backend_main";
    public function actionIndex(){
        return $this->render('index');
    }
}