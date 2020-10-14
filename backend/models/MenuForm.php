<?php
namespace backend\models;

use yii\base\Model;
use yii\behaviors\TimestampBehavior;
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
            [['name','status'],'required'],
            [['title','pid','image'],"safe"],
            ['sort','number']
        ];
    }
    public function scenarios()
    {
        return [
            'add'   =>  ['name',"status",'image','title',"pid","sort"]
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at','updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at']
                ],
            ],
        ];
    }
}