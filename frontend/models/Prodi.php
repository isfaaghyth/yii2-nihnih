<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id
 * @property string $nama
 * @property string $kode
 *
 * @property Mahasiswa[] $mahasiswas
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'kode'], 'required'],
            [['nama'], 'string', 'max' => 45],
            [['kode'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'kode' => 'Kode',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['prodi_id' => 'id']);
    }
}
