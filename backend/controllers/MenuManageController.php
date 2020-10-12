<?php


namespace backend\controllers;


use backend\controllers\base\Menu;
use backend\models\MenuForm;
use yii\web\Request;
use yii\web\Response;
use yii\web\UploadedFile;

class MenuManageController extends Menu
{
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionAdd(){
       $model =  new MenuForm();
        $model->scenario = "add";
        $data = MenuForm::find()->all();
       if (\Yii::$app->request->isPost){
          $file = UploadedFile::getInstance($model,"image");
           $path = $this->getpath();
           $rpath = md5($file->name).".".$file->getExtension();
           $path =$path."/".$rpath;
           if ($file->saveAs($path)){
               echo "上传成功啦";
           }else{
               echo "上传失败了";
           }
           $data = \Yii::$app->request->post();
           $data['MenuForm']['image'] = $this->getRpath()."/".$rpath;
           $model->appid = "backend";
           if ($model->load($data)&&$model->save()){
               return $this->actionIndex("");
           }else{
               \Yii::$app->response->format = Response::FORMAT_JSON;
               return $model->getErrors();
           }
       }
       return $this->render("add",[
           "model"  =>  $model,
           'data'   =>  $data
       ]);
    }
    public function getpath(){
        $year = date("Y",time());
        $month = date("m",time());
        $day = date("d",time());
        $path = \Yii::getAlias("@uploads")."/image/".$year."/".$month."/".$day;
        if (!file_exists($path)){
            mkdir($path,0777,true);
        }
        return $path;
    }
    public function getRpath(){
        $year = date("Y",time());
        $month = date("m",time());
        $day = date("d",time());
        return "/image/".$year."/".$month."/".$day;
    }
}