<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id_menu
 * @property string|null $nama_menu
 * @property float $harga_menu
 * @property int|null $id_Admin
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_menu', 'harga_menu'], 'required'],
            [['id_menu', 'id_Admin'], 'integer'],
            [['harga_menu'], 'number'],
            [['nama_menu'], 'string', 'max' => 255],
            [['id_menu', 'harga_menu'], 'unique', 'targetAttribute' => ['id_menu', 'harga_menu']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_menu' => 'Id Menu',
            'nama_menu' => 'Nama Menu',
            'harga_menu' => 'Harga Menu',
            'id_Admin' => 'Id Admin',
        ];
    }
}
