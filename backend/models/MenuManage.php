<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "menu_manage".
 *
 * @property int $id 主键
 * @property string $name 别名
 * @property string|null $title 标题
 * @property string $appid 应用
 * @property int|null $is_addon 是否是插件
 * @property string|null $addons_name 插件名称
 * @property int|null $pid 父id
 * @property int|null $level 等级
 * @property int|null $sort 排序
 * @property string|null $image 图片
 * @property string|null $tree 树
 * @property int $status -1删除 0 禁用 1启用
 * @property int|null $created_at 创建时间
 * @property int|null $updated_at 修改时间
 */
class MenuManage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_manage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'appid', 'status'], 'required'],
            [['is_addon', 'pid', 'level', 'sort', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 64],
            [['title', 'image'], 'string', 'max' => 255],
            [['appid'], 'string', 'max' => 20],
            [['addons_name'], 'string', 'max' => 200],
            [['tree'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'appid' => 'Appid',
            'is_addon' => 'Is Addon',
            'addons_name' => 'Addons Name',
            'pid' => 'Pid',
            'level' => 'Level',
            'sort' => 'Sort',
            'image' => 'Image',
            'tree' => 'Tree',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
