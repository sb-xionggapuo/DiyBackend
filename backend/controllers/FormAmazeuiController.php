<?php


namespace backend\controllers;


use backend\controllers\base\Form;
use yii\web\Controller;

class FormAmazeuiController extends Form
{
    public function actionIndex(){
        return $this->render("index");
    }
}