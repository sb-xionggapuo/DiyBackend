<?php
namespace backend\models;


use yii\base\Model;

class MenuForm extends Model
{
    public function rules()
    {
        return [
          [['name','status'],'required'],
        ];
    }
}