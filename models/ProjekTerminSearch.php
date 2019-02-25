<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProjekTermin;

/**
 * ProjekTerminSearch represents the model behind the search form of `app\models\ProjekTermin`.
 */
class ProjekTerminSearch extends ProjekTermin
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_projek', 'termin', 'persen', 'jumlah'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProjekTermin::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['termin' => SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // $query->orderBy(['termin' => SORT_DESC]);

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_projek' => $this->id_projek,
            'termin' => $this->termin,
            'persen' => $this->persen,
            'jumlah' => $this->jumlah,
        ]);
        return $dataProvider;
    }
}
