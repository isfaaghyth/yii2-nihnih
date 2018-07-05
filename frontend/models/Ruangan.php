<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ruangan".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 *
 * @property Kelas[] $kelas
 */
class Ruangan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ruangan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasMany(Kelas::className(), ['ruangan_id' => 'id']);
    }
}
