<?php
namespace backend\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class MenuForm extends ActiveRecord
{
  public static function tableName()
  {
      return '{{menu_manage}}';
  }

    public function rules()
    {
        return [
            [['name','status','image'],'required'],
            [['title','pid'],"safe"],
            ['sort','number']
        ];
    }
    public function scenarios()
    {
        return [
            'add'   =>  ['name',"status",'image','title',"pid","sort"]
        ];
    }
}