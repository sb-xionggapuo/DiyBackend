<?php
namespace backend\controllers\base;

class Form extends \yii\web\Controller
{
    public function __construct($id, $module, $config = [])
    {
        $view = \Yii::$app->getView();
        $view->params['nav']="form";
        parent::__construct($id, $module, $config);
    }
}