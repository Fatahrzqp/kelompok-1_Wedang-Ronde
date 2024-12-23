<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Konsumen;

/**
 * KonsumenSearch represents the model behind the search form of `app\models\Konsumen`.
 */
class KonsumenSearch extends Konsumen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Konsumen', 'menu_id_menu', 'Admin_id_Admin', 'Pembayaran_idPembayaran', 'Pembayaran_id_menu', 'Pembayaran_id_konsumen'], 'integer'],
            [['nama_konsumen', 'alamat_konsumen', 'telephone_konsumen', 'Pembayaran_metode_pembayaran', 'Pembayaran_tgl_pembayaran'], 'safe'],
            [['menu_harga_menu'], 'number'],
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
        $query = Konsumen::find();

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
            'id_Konsumen' => $this->id_Konsumen,
            'menu_id_menu' => $this->menu_id_menu,
            'menu_harga_menu' => $this->menu_harga_menu,
            'Admin_id_Admin' => $this->Admin_id_Admin,
            'Pembayaran_idPembayaran' => $this->Pembayaran_idPembayaran,
            'Pembayaran_id_menu' => $this->Pembayaran_id_menu,
            'Pembayaran_id_konsumen' => $this->Pembayaran_id_konsumen,
            'Pembayaran_tgl_pembayaran' => $this->Pembayaran_tgl_pembayaran,
        ]);

        $query->andFilterWhere(['like', 'nama_konsumen', $this->nama_konsumen])
            ->andFilterWhere(['like', 'alamat_konsumen', $this->alamat_konsumen])
            ->andFilterWhere(['like', 'telephone_konsumen', $this->telephone_konsumen])
            ->andFilterWhere(['like', 'Pembayaran_metode_pembayaran', $this->Pembayaran_metode_pembayaran]);

        return $dataProvider;
    }
}
