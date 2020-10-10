<?php


namespace backend\controllers;


use backend\controllers\base\Menu;
use backend\models\MenuForm;

class MenuManageController extends Menu
{
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionAdd(){
       $model =  new MenuForm();
       if ($model->load(\Yii::$app->request->post())){
            var_dump("dahsj");die;
       }
       return $this->render("add",[
          'model' =>    $model
       ]);
    }
}