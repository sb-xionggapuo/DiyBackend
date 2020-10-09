<?php


namespace backend\controllers;


use yii\web\Controller;

class TableFontController extends Controller{
    public $layout = "backend_main";
    public function actionIndex(){
     return  $this->render('index');
    }
}