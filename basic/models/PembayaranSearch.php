<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pembayaran;

/**
 * PembayaranSearch represents the model behind the search form of `app\models\Pembayaran`.
 */
class PembayaranSearch extends Pembayaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idPembayaran', 'id_menu', 'id_konsumen'], 'integer'],
            [['metode_pembayaran', 'tgl_pembayaran', 'total_pembayaran'], 'safe'],
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
        $query = Pembayaran::find();

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
            'idPembayaran' => $this->idPembayaran,
            'id_menu' => $this->id_menu,
            'id_konsumen' => $this->id_konsumen,
            'tgl_pembayaran' => $this->tgl_pembayaran,
        ]);

        $query->andFilterWhere(['like', 'metode_pembayaran', $this->metode_pembayaran])
            ->andFilterWhere(['like', 'total_pembayaran', $this->total_pembayaran]);

        return $dataProvider;
    }
}
