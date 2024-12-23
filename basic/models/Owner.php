<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "owner".
 *
 * @property int $id_Owner
 * @property string|null $nama_owner
 * @property string|null $alamat_owner
 * @property string|null $telephone_owner
 *
 * @property Admin[] $admins
 */
class Owner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'owner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Owner'], 'required'],
            [['id_Owner'], 'integer'],
            [['nama_owner', 'alamat_owner', 'telephone_owner'], 'string', 'max' => 45],
            [['id_Owner'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Owner' => 'Id Owner',
            'nama_owner' => 'Nama Owner',
            'alamat_owner' => 'Alamat Owner',
            'telephone_owner' => 'Telephone Owner',
        ];
    }

    /**
     * Gets query for [[Admins]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdmins()
    {
        return $this->hasMany(Admin::class, ['Owner_id_Owner' => 'id_Owner']);
    }
}
