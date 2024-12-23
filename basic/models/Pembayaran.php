<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $idPembayaran
 * @property int $id_menu
 * @property int|null $id_konsumen
 * @property string $metode_pembayaran
 * @property string|null $tgl_pembayaran
 * @property string|null $total_pembayaran
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_menu', 'metode_pembayaran'], 'required'],
            [['id_menu', 'id_konsumen'], 'integer'],
            [['tgl_pembayaran'], 'safe'],
            [['metode_pembayaran', 'total_pembayaran'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPembayaran' => 'Id Pembayaran',
            'id_menu' => 'Id Menu',
            'id_konsumen' => 'Id Konsumen',
            'metode_pembayaran' => 'Metode Pembayaran',
            'tgl_pembayaran' => 'Tgl Pembayaran',
            'total_pembayaran' => 'Total Pembayaran',
        ];
    }
}
