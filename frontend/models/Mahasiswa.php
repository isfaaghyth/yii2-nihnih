<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim
 * @property string $nama
 * @property double $ipk
 * @property string $gender
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property int $prodi_id
 *
 * @property Prodi $prodi
 * @property Questioner[] $questioners
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'prodi_id'], 'required'],
            [['ipk'], 'number'],
            [['tgl_lahir'], 'safe'],
            [['prodi_id'], 'integer'],
            [['nim'], 'string', 'max' => 10],
            [['nama', 'tempat_lahir'], 'string', 'max' => 45],
            [['gender'], 'string', 'max' => 1],
            [['nim'], 'unique'],
            [['prodi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::className(), 'targetAttribute' => ['prodi_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'ipk' => 'Ipk',
            'gender' => 'Gender',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'prodi_id' => 'Prodi ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(Prodi::className(), ['id' => 'prodi_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestioners()
    {
        return $this->hasMany(Questioner::className(), ['nim' => 'nim']);
    }
}
