<?php


namespace backend\controllers\base;


use yii\web\Controller;

class Menu extends Controller
{
    public function __construct($id, $module, $config = [])
    {
        $view = \Yii::$app->getView();
        $view->params['nav'] = 'menu';
        parent::__construct($id, $module, $config);
    }
}