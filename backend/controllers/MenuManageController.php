<?php


namespace backend\controllers;


use backend\controllers\base\Menu;
use backend\models\MenuForm;
use yii\web\Request;
use yii\web\Response;
use yii\web\UploadedFile;

class MenuManageController extends Menu
{
    public function beforeAction($action)
    {
        $currentaction = $action->id;

        $novalidactions = ['up'];

        if(in_array($currentaction,$novalidactions)) {

            $action->controller->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex(){
        $model = MenuForm::find()->all();
        return $this->render('index',[
            'model' =>  $model
        ]);
    }
    public function actionAdd(){
       $model =  new MenuForm();
        $model->scenario = "add";
        $data = MenuForm::find()->select(['id','pid','title'])->all();
       if (\Yii::$app->request->isPost){
           $data = \Yii::$app->request->post();
           if (!empty($data['image'])){
               $data['MenuForm']['image'] = $data['image'][0];
           }
           $model->appid = "backend";
           if ($model->load($data)&&$model->save()){
               return $this->actionIndex();
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
    public function actionUp(){
        $base64Str = $_POST['image'];
//post的数据里面，加号会被替换为空格，需要重新替换回来，如果不是post的数据，则注释掉这一行
        $base64Image = str_replace(' ', '+', $base64Str);
//匹配出图片的格式
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64Image, $result)){
            //获取后缀
            $type = $result[2];
            //设置保存路径
            $filePath = $this->getpath();
            //设置文件名
            $rpath = $this->getRpath();
            $rname = $rpath."/".md5($base64Str).".".$type;
            $fileName =md5($base64Str).".".$type;
            //设置图片路径
            $newFile = $filePath."/".$fileName;
            //存放图片
            if (file_put_contents($newFile, base64_decode(str_replace($result[1], '', $base64Image)))){
                //返回文件路径
                die("/uploads".$rname);
            }else{
                die("error");
            }
        }else{
            die("error");
        }
    }
}