<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projek".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property int $tahun
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 * @property int $status
 * @property int $id_ref_instansi
 * @property int $id_ref_project
 * @property int $id_ref_perusahaan_pengguna
 * @property int $id_ref_perusahaan_peminjam
 * @property int $id_ref_kriteria
 * @property string $nos_spk
 * @property string $penanggungjawab_lapangan
 * @property string $penanggungjawab_administrasi
 * @property int $status_admin
 * @property int $status_teknis
 * @property int $status_kak
 * @property int $status_proposal
 * @property int $status_laporan_bulan
 * @property int $status_rab
 * @property int $status_spk
 * @property int $status_spp_ppn
 * @property int $status_spp_pph
 * @property int $status_sp2d
 * @property int $status_skb
 * @property int $status_bast
 * @property int $status_referensi_ta
 * @property int $status_pembelian_barang
 * @property int $progress
 * @property string $administrasi
 * @property string $keterangan
 * @property double $pagu
 * @property double $nilai_kontrak
 * @property int $id_ref_lokasi
 * @property string $jenis
 * @property int $bulan
 * @property int $hari
 *
 * @property RefJenisInstansi $refInstansi
 * @property RefJenisProjek $refJenisProject
 * @property RefPerusahaan $refPerusahaanPengguna
 * @property RefPerusahaan $refPerusahaanPeminjam
 * @property RefKriteria $refKriteria
 * @property RefLokasi $refLokasi
 */
class Projek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'tanggal_mulai', 'tanggal_selesai', 'status', 'id_ref_instansi', 'id_ref_jenis_project', 'id_ref_kriteria', 'nos_spk', 'id_ref_lokasi', 'jenis',], 'required'],
            //[['kode'],'integer','message' => '{attribute} harus angka'],
            [['tahun', 'id_ref_instansi', 'id_ref_jenis_project', 'id_ref_perusahaan_pengguna', 'id_ref_perusahaan_peminjam', 'id_ref_kriteria', 'status_pembelian_barang', 'id_ref_lokasi'], 'integer'],
            [['progress'], 'integer', 'max' => 100, 'min' => 1],
            [['tanggal_mulai', 'tanggal_selesai', 'status'], 'safe'],
            [['pagu', 'nilai_kontrak', 'status_kak', 'status_proposal', 'status_laporan_bulan', 'status_rab', 'status_spk', 'status_spp_ppn', 'status_spp_pph', 'status_sp2d', 'status_skb', 'status_bast', 'status_referensi_ta'], 'required'],
            [['kode', 'nama', 'nos_spk', 'penanggungjawab_lapangan', 'penanggungjawab_administrasi', 'administrasi', 'jenis', 'status_admin', 'status_teknis' ], 'string', 'max'=> 255],
            [['keterangan'], 'string'],
            [['id_ref_instansi'], 'exist', 'skipOnError' => true, 'targetClass' => RefInstansi::className(), 'targetAttribute' => ['id_ref_instansi' => 'id']],
            [['id_ref_jenis_project'], 'exist', 'skipOnError' => true, 'targetClass' => RefJenisProjek::className(), 'targetAttribute' => ['id_ref_jenis_project' => 'id']],
            [['id_ref_perusahaan_pengguna'], 'exist', 'skipOnError' => true, 'targetClass' => RefPerusahaan::className(), 'targetAttribute' => ['id_ref_perusahaan_pengguna' => 'id']],
            [['id_ref_perusahaan_peminjam'], 'exist', 'skipOnError' => true, 'targetClass' => RefPerusahaan::className(), 'targetAttribute' => ['id_ref_perusahaan_peminjam' => 'id']],
            [['id_ref_kriteria'], 'exist', 'skipOnError' => true, 'targetClass' => RefKriteria::className(), 'targetAttribute' => ['id_ref_kriteria' => 'id']],
            [['id_ref_lokasi'], 'exist', 'skipOnError' => true, 'targetClass' => RefLokasi::className(), 'targetAttribute' => ['id_ref_lokasi' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode Project',
            'nama' => 'Nama Project',
            'tahun' => 'Tahun',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_selesai' => 'Tanggal Selesai',
            'status' => 'Status Project',
            'jenis' => 'Jenis',
            'id_ref_lokasi' => 'Lokasi',
            'id_ref_instansi' => 'Nama Instansi',
            'id_ref_jenis_project' => 'Jenis Project',
            'id_ref_perusahaan_pengguna' => 'Perusahaan Pengguna',
            'id_ref_perusahaan_peminjam' => 'Perusahaan Peminjam',
            'id_ref_kriteria' => 'Kriteria',
            'nos_spk' => 'No SPK',
            'pagu' => 'Nilai Pagu',
            'nilai_kontrak' => 'Nilai Kontrak',
            'penanggungjawab_lapangan' => 'Penanggungjawab Lapangan',
            'penanggungjawab_administrasi' => 'Penanggungjawab Administrasi',
            'status_admin' => 'Status Admin',
            'status_teknis' => 'Status Teknis',
            'status_kak' => 'Status KAK',
            'status_proposal' => 'Status Proposal',
            'status_laporan_bulan' => 'Status Laporan Bulan',
            'status_rab' => 'Status RAB',
            'status_spk' => 'Status SPK',
            'status_spp_ppn' => 'Status SPP PPN',
            'status_spp_pph' => 'Status SPP PPH',
            'status_sp2d' => 'Status SP2D',
            'status_skb' => 'Status SKB',
            'status_bast' => 'Status BAST',
            'status_referensi_ta' => 'Status Referensi TA',
            'status_pembelian_barang' => 'Status Pembelian Barang',
            'administrasi' => 'Administrasi',
            'progress' => 'Progress Project',
            'keterangan' => 'Keterangan'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefInstansi()
    {
        return $this->hasOne(RefInstansi::className(), ['id' => 'id_ref_instansi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefJenisProject()
    {
        return $this->hasOne(RefJenisProjek::className(), ['id' => 'id_ref_jenis_project']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefPerusahaanPengguna()
    {
        return $this->hasOne(RefPerusahaan::className(), ['id' => 'id_ref_perusahaan_pengguna']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefPerusahaanPeminjam()
    {
        return $this->hasOne(RefPerusahaan::className(), ['id' => 'id_ref_perusahaan_peminjam']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefKriteria()
    {
        return $this->hasOne(RefKriteria::className(), ['id' => 'id_ref_kriteria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefLokasi()
    {
        return $this->hasOne(RefLokasi::className(), ['id' => 'id_ref_lokasi']);
    }

    public function getProgress()
    {
        return $progress = $this->progress."%";
    }

    public function getKak()
    {
        $kak = $this->status_kak;

        if($this->status_kak == 'Belum'){
            return "&nbsp <span class='glyphicon glyphicon-remove' style='color:red;'> BelumTersedia </span>";
        }elseif ($this->status_kak == 'Proses') {
            return "&nbsp <span class='glyphicon glyphicon-refresh' style='color:orange;'> SedangProses </span>";
        }else{
            return "&nbsp <span class='glyphicon glyphicon-ok'style='color:#30fb41;'> SudahSelesai </span>"; 
        }
    }

    public function getProposal()
    {
        if($this->status_proposal == 'Belum'){
            return "&nbsp <span class='glyphicon glyphicon-remove' style='color:red;'> BelumTersedia </span>";
        }elseif ($this->status_proposal == 'Proses') {
            return "&nbsp <span class='glyphicon glyphicon-refresh' style='color:orange;'> SedangProses </span>";
        }else{
            return "&nbsp <span class='glyphicon glyphicon-ok'style='color:#30fb41;'> SudahSelesai </span>"; 
        }
    }

    public function getLaporanBulanan()
    {
        if($this->status_laporan_bulan == 'Belum'){
            return "&nbsp <span class='glyphicon glyphicon-remove' style='color:red;'> BelumTersedia </span>";
        }elseif ($this->status_laporan_bulan == 'Proses') {
            return "&nbsp <span class='glyphicon glyphicon-refresh' style='color:orange;'> SedangProses </span>";
        }else{
            return "&nbsp <span class='glyphicon glyphicon-ok'style='color:#30fb41;'> SudahSelesai </span>"; 
        }
    }

    public function getRab()
    {
        if($this->status_rab == 'Belum'){
            return "&nbsp <span class='glyphicon glyphicon-remove' style='color:red;'> BelumTersedia </span>";
        }elseif ($this->status_rab == 'Proses') {
            return "&nbsp <span class='glyphicon glyphicon-refresh' style='color:orange;'> SedangProses </span>";
        }else{
            return "&nbsp <span class='glyphicon glyphicon-ok'style='color:#30fb41;'> SudahSelesai </span>"; 
        }
    }

    public function getSpk()
    {
        if($this->status_spk == 'Belum'){
            return "&nbsp <span class='glyphicon glyphicon-remove' style='color:red;'> BelumTersedia </span>";
        }elseif ($this->status_spk == 'Proses') {
            return "&nbsp <span class='glyphicon glyphicon-refresh' style='color:orange;'> SedangProses </span>";
        }else{
            return "&nbsp <span class='glyphicon glyphicon-ok'style='color:#30fb41;'> SudahSelesai </span>"; 
        }
    }

    public function getSppPpn()
    {
        if($this->status_spp_ppn == 'Belum'){
            return "&nbsp <span class='glyphicon glyphicon-remove' style='color:red;'> BelumTersedia </span>";
        }elseif ($this->status_spp_ppn == 'Proses') {
            return "&nbsp <span class='glyphicon glyphicon-refresh' style='color:orange;'> SedangProses </span>";
        }else{
            return "&nbsp <span class='glyphicon glyphicon-ok'style='color:#30fb41;'> SudahSelesai </span>"; 
        }
    }

    public function getSppPph()
    {
        if($this->status_spp_pph == 'Belum'){
            return "&nbsp <span class='glyphicon glyphicon-remove' style='color:red;'> BelumTersedia </span>";
        }elseif ($this->status_spp_pph == 'Proses') {
            return "&nbsp <span class='glyphicon glyphicon-refresh' style='color:orange;'> SedangProses </span>";
        }else{
            return "&nbsp <span class='glyphicon glyphicon-ok'style='color:#30fb41;'> SudahSelesai </span>"; 
        }
    }

    public function getSp2d()
    {
        if($this->status_sp2d == 'Belum'){
            return "&nbsp <span class='glyphicon glyphicon-remove' style='color:red;'> BelumTersedia </span>";
        }elseif ($this->status_sp2d == 'Proses') {
            return "&nbsp <span class='glyphicon glyphicon-refresh' style='color:orange;'> SedangProses </span>";
        }else{
            return "&nbsp <span class='glyphicon glyphicon-ok'style='color:#30fb41;'> SudahSelesai </span>"; 
        }
    }

    public function getSkb()
    {
        if($this->status_skb == 'Belum'){
            return "&nbsp <span class='glyphicon glyphicon-remove' style='color:red;'> BelumTersedia </span>";
        }elseif ($this->status_skb == 'Proses') {
            return "&nbsp <span class='glyphicon glyphicon-refresh' style='color:orange;'> SedangProses </span>";
        }else{
            return "&nbsp <span class='glyphicon glyphicon-ok'style='color:#30fb41;'> SudahSelesai </span>"; 
        }
    }

    public function getBast()
    {
        if($this->status_bast == 'Belum'){
            return "&nbsp <span class='glyphicon glyphicon-remove' style='color:red;'> BelumTersedia </span>";
        }elseif ($this->status_bast == 'Proses') {
            return "&nbsp <span class='glyphicon glyphicon-refresh' style='color:orange;'> SedangProses </span>";
        }else{
            return "&nbsp <span class='glyphicon glyphicon-ok'style='color:#30fb41;'> SudahSelesai </span>"; 
        }
    }

    public function getReferensiTa()
    {
        if($this->status_referensi_ta == 'Belum'){
            return "&nbsp <span class='glyphicon glyphicon-remove' style='color:red;'> BelumTersedia </span>";
        }elseif ($this->status_referensi_ta == 'Proses') {
            return "&nbsp <span class='glyphicon glyphicon-refresh' style='color:orange;'> SedangProses </span>";
        }else{
            return "&nbsp <span class='glyphicon glyphicon-ok'style='color:#30fb41;'> SudahSelesai </span>"; 
        }
    }
}
