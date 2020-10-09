<?php


namespace backend\controllers\base;


use yii\web\Controller;

class Table extends Controller
{
    public function __construct($id, $module, $config = [])
    {
        $view = \Yii::$app->getView();
        $view->params['nav']="table";
        parent::__construct($id, $module, $config);
    }
}