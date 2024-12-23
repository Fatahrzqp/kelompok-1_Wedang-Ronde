<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "konsumen".
 *
 * @property int $id_Konsumen
 * @property string|null $nama_konsumen
 * @property string|null $alamat_konsumen
 * @property string|null $telephone_konsumen
 * @property int $menu_id_menu
 * @property float $menu_harga_menu
 * @property int $Admin_id_Admin
 * @property int $Pembayaran_idPembayaran
 * @property int $Pembayaran_id_menu
 * @property int $Pembayaran_id_konsumen
 * @property string $Pembayaran_metode_pembayaran
 * @property string|null $Pembayaran_tgl_pembayaran
 */
class Konsumen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'konsumen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Konsumen', 'menu_id_menu', 'menu_harga_menu', 'Admin_id_Admin', 'Pembayaran_idPembayaran', 'Pembayaran_id_menu', 'Pembayaran_id_konsumen', 'Pembayaran_metode_pembayaran'], 'required'],
            [['id_Konsumen', 'menu_id_menu', 'Admin_id_Admin', 'Pembayaran_idPembayaran', 'Pembayaran_id_menu', 'Pembayaran_id_konsumen'], 'integer'],
            [['menu_harga_menu'], 'number'],
            [['Pembayaran_tgl_pembayaran'], 'safe'],
            [['nama_konsumen', 'alamat_konsumen', 'telephone_konsumen', 'Pembayaran_metode_pembayaran'], 'string', 'max' => 45],
            [['id_Konsumen'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Konsumen' => 'Id Konsumen',
            'nama_konsumen' => 'Nama Konsumen',
            'alamat_konsumen' => 'Alamat Konsumen',
            'telephone_konsumen' => 'Telephone Konsumen',
            'menu_id_menu' => 'Menu Id Menu',
            'menu_harga_menu' => 'Menu Harga Menu',
            'Admin_id_Admin' => 'Admin Id Admin',
            'Pembayaran_idPembayaran' => 'Pembayaran Id Pembayaran',
            'Pembayaran_id_menu' => 'Pembayaran Id Menu',
            'Pembayaran_id_konsumen' => 'Pembayaran Id Konsumen',
            'Pembayaran_metode_pembayaran' => 'Pembayaran Metode Pembayaran',
            'Pembayaran_tgl_pembayaran' => 'Pembayaran Tgl Pembayaran',
        ];
    }
}
