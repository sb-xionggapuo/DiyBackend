<?php


namespace backend\controllers;


use yii\filters\AccessControl;
use yii\web\Controller;

class IndexController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    public function actionIndex(){
        return $this->render("index");
    }
}