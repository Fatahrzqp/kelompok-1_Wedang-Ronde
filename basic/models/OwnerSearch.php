<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Owner;

/**
 * OwnerSearch represents the model behind the search form of `app\models\Owner`.
 */
class OwnerSearch extends Owner
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Owner'], 'integer'],
            [['nama_owner', 'alamat_owner', 'telephone_owner'], 'safe'],
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
        $query = Owner::find();

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
            'id_Owner' => $this->id_Owner,
        ]);

        $query->andFilterWhere(['like', 'nama_owner', $this->nama_owner])
            ->andFilterWhere(['like', 'alamat_owner', $this->alamat_owner])
            ->andFilterWhere(['like', 'telephone_owner', $this->telephone_owner]);

        return $dataProvider;
    }
}
