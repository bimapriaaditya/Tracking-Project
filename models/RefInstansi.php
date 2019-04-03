<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "ref__instansi".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Projek[] $projeks
 */
class RefInstansi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_instansi';
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
            'nama' => 'Nama Instansi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjeks()
    {
        return $this->hasMany(Projek::className(), ['id_ref_instansi' => 'id']);
    }

    public static function getList()
    {
        $query = RefInstansi::find()->orderBy(['nama' => SORT_ASC])->all();
        return ArrayHelper::map($query,'id','nama');
    }
}
