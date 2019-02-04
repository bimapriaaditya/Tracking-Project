<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "ref_jenis_projek".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Projek[] $projeks
 */
class RefJenisProjek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_jenis_projek';
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
        return $this->hasMany(Projek::className(), ['id_ref_jenis_project' => 'id']);
    }

    public static function getList()
    {
        $query = RefJenisProjek::find()->all();
        return ArrayHelper::map($query,'id','nama');
    }
}
