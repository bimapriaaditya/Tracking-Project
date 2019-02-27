<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projek_termin".
 *
 * @property int $id
 * @property int $id_projek
 * @property int $termin
 * @property int $persen
 * @property int $jumlah
 */
class ProjekTermin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projek_termin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_projek', 'termin', 'persen'], 'required'],
            [['id_projek', 'termin', 'persen', 'jumlah'], 'integer'],
            [['keterangan','jumlah'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_projek' => 'Id Projek',
            'termin' => 'Termin',
            'persen' => 'Persen',
            'jumlah' => 'Jumlah',
            'keterangan' => 'Keterangan',
        ];
    }

    public function getDppTermin()
    {
        return $this->jumlah / 1.1;
    }
    public function getPpnTermin()
    {
        return $this->getDppTermin() * 0.10 ;
    }
    public function getPphTermin()
    {
        return $this->getDppTermin() * 0.2;
    }
    public function getNetTermin()
    {
        return $this->getDppTermin() - $this->getPphTermin();
    }

    public function getProjek()
    {
        return $this->hasOne(Projek::className(), ['id' => 'id_projek']);
    }
}
