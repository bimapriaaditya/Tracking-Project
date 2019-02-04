<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "ref_lokasi".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Projek[] $projeks
 */
class RefLokasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_lokasi';
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
        return $this->hasMany(Projek::className(), ['id_ref_lokasi' => 'id']);
    }

    public static function getList()
    {
        $query = RefLokasi::find()->all();
        return ArrayHelper::map($query,'id','nama');
    }
}
