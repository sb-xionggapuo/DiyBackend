<?php


namespace backend\controllers;


use yii\web\Controller;

class ChartController extends Controller
{
    public $layout = "backend_main";
    public function actionIndex(){
       return $this->render("index");
    }
}