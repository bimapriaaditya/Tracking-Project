<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Projek;

/**
 * ProjekSearch represents the model behind the search form of `app\models\Projek`.
 */
class ProjekSearch extends Projek
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tahun', 'status', 'id_ref_jenis_project', 'id_ref_perusahaan_pengguna', 'id_ref_perusahaan_peminjam', 
            'id_ref_kriteria', 'status_admin', 'status_teknis', 'status_kak', 'status_proposal', 'status_laporan_bulan', 
            'status_rab', 'status_spk', 'status_sp2d', 'status_skb', 'status_bast',
            'status_referensi_ta', 'status_pembelian_barang', 'id_ref_lokasi', 'id_ref_metode_pembayaran'], 'integer'],
            [['kode', 'nama', 'tanggal_mulai', 'tanggal_selesai', 'nos_spk', 'penanggungjawab_lapangan',
            'penanggungjawab_administrasi', 'administrasi', 'keterangan', 'jenis', 'id_ref_instansi'], 'safe'],
            [['pagu', 'nilai_kontrak'], 'number'],
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
        $query = Projek::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions

        $query->andFilterWhere([
            'id' => $this->id,
            'tahun' => $this->tahun,
            'tanggal_mulai' => $this->tanggal_mulai,
            'tanggal_selesai' => $this->tanggal_selesai,
            'status' => $this->status,
            'id_ref_instansi' => $this->id_ref_instansi,
            'id_ref_jenis_project' => $this->id_ref_jenis_project,
            'id_ref_perusahaan_pengguna' => $this->id_ref_perusahaan_pengguna,
            'id_ref_perusahaan_peminjam' => $this->id_ref_perusahaan_peminjam,
            'id_ref_kriteria' => $this->id_ref_kriteria,
            'status_admin' => $this->status_admin,
            'status_teknis' => $this->status_teknis,
            'status_kak' => $this->status_kak,
            'status_proposal' => $this->status_proposal,
            'status_laporan_bulan' => $this->status_laporan_bulan,
            'status_rab' => $this->status_rab,
            'status_spk' => $this->status_spk,
            'status_sp2d' => $this->status_sp2d,
            'status_skb' => $this->status_skb,
            'status_bast' => $this->status_bast,
            'status_referensi_ta' => $this->status_referensi_ta,
            'status_pembelian_barang' => $this->status_pembelian_barang,
            'pagu' => $this->pagu,
            'nilai_kontrak' => $this->nilai_kontrak,
            'id_ref_lokasi' => $this->id_ref_lokasi,
        ]);

        // $query->orderBy(['id' => SORT_DESC]);

        $query->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'nos_spk', $this->nos_spk])
            ->andFilterWhere(['like', 'penanggungjawab_lapangan', $this->penanggungjawab_lapangan])
            ->andFilterWhere(['like', 'penanggungjawab_administrasi', $this->penanggungjawab_administrasi])
            ->andFilterWhere(['like', 'administrasi', $this->administrasi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'jenis', $this->jenis]);

        return $dataProvider;
    }
}
