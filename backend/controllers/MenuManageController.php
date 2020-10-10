<?php


namespace backend\controllers;


use backend\controllers\base\Menu;

class MenuManageController extends Menu
{
    public function actionIndex(){
        return $this->render('index');
    }
}