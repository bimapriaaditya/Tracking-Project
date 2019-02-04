<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "ref_perusahaan".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Projek[] $projeks
 * @property Projek[] $projeks0
 */
class RefPerusahaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_perusahaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjeks()
    {
        return $this->hasMany(Projek::className(), ['id_ref_perusahaan_pengguna' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjeks0()
    {
        return $this->hasMany(Projek::className(), ['id_ref_perusahaan_peminjam' => 'id']);
    }

    public static function getList()
    {
        $query = RefPerusahaan::find()->all();
        return ArrayHelper::map($query,'id','nama');
    }
}
