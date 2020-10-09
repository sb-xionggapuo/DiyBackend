<?php


namespace backend\controllers;


use backend\controllers\base\Table;

class FormNewsController extends Table
{
    public function actionIndex(){
        return $this->render("index");
    }
}