<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MenuManage;

/**
 * MenuManageSerach represents the model behind the search form of `backend\models\MenuManage`.
 */
class MenuManageSerach extends MenuManage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'is_addon', 'pid', 'level', 'sort', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'title', 'appid', 'addons_name', 'image', 'tree'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MenuManage::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'is_addon' => $this->is_addon,
            'pid' => $this->pid,
            'level' => $this->level,
            'sort' => $this->sort,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'appid', $this->appid])
            ->andFilterWhere(['like', 'addons_name', $this->addons_name])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'tree', $this->tree]);

        return $dataProvider;
    }
}
