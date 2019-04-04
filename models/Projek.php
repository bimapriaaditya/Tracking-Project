<?php

namespace app\models;

use Yii;
use DateTime;
use yii\helpers\Html;

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
 * @property string $jenis
 * @property int $bulan
 * @property int $hari
 * @property RefJenisProjek $refJenisProject
 * @property RefPerusahaan $refPerusahaanPengguna
 * @property RefPerusahaan $refPerusahaanPeminjam
 * @property RefKriteria $refKriteria
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

            [['nama','lokasi', 'tanggal_mulai', 'tanggal_selesai', 'status', 'id_ref_instansi', 'id_ref_jenis_project', 'id_ref_kriteria', 'nos_spk', 'jenis','id_ref_metode_pembayaran'], 'required'],
            //[['kode'],'integer','message' => '{attribute} harus angka'],
            [['tahun', 'id_ref_instansi', 'id_ref_jenis_project', 'id_ref_perusahaan_pengguna', 'id_ref_perusahaan_peminjam', 'id_ref_kriteria','id_ref_metode_pembayaran'], 'integer'],

            //
            [['progress'], 'integer', 'max' => 100, 'min' => 1],
            //
            [['kode','tanggal_mulai', 'tanggal_selesai', 'status','urutan','rentang_waktu', 'status_pembelian_barang'], 'safe'],
            //
            [['pagu', 'nilai_kontrak', 'status_kak', 'status_proposal', 'status_laporan_bulan', 'status_rab', 'status_spk','status_sp2d', 'status_skb', 'status_bast', 'status_referensi_ta'], 'required'],
            //
            [['kode', 'nama', 'nos_spk', 'penanggungjawab_lapangan', 'penanggungjawab_administrasi', 'administrasi', 'jenis', 'status_admin', 'status_teknis' ], 'string', 'max'=> 255],
            //
            [['keterangan'], 'string'],
            //
            [['id_ref_jenis_project'], 'exist', 'skipOnError' => true, 'targetClass' => RefJenisProjek::className(), 'targetAttribute' => ['id_ref_jenis_project' => 'id']],
            //
            [['id_ref_instansi'], 'exist', 'skipOnError' => true, 'targetClass' => RefInstansi::className(), 'targetAttribute' => ['id_ref_instansi' => 'id']],
            //
            [['id_ref_perusahaan_pengguna'], 'exist', 'skipOnError' => true, 'targetClass' => RefPerusahaan::className(), 'targetAttribute' => ['id_ref_perusahaan_pengguna' => 'id']],
            //
            [['id_ref_perusahaan_peminjam'], 'exist', 'skipOnError' => true, 'targetClass' => RefPerusahaan::className(), 'targetAttribute' => ['id_ref_perusahaan_peminjam' => 'id']],
            //
            [['id_ref_kriteria'], 'exist', 'skipOnError' => true, 'targetClass' => RefKriteria::className(), 'targetAttribute' => ['id_ref_kriteria' => 'id']],
            //
             [['id_ref_metode_pembayaran'], 'exist', 'skipOnError' => true, 'targetClass' => RefMetodePembayaran::className(), 'targetAttribute' => ['id_ref_metode_pembayaran' => 'id']],
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
            'urutan' => 'urutan',
            'nama' => 'Nama Project',
            'tahun' => 'Tahun',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_selesai' => 'Tanggal Selesai',
            'status' => 'Status Project',
            'lokasi' => 'Lokasi Project',
            'jenis' => 'Jenis',
            'id_ref_instansi' => 'Instansi',
            'id_ref_jenis_project' => 'Jenis Project',
            'id_ref_perusahaan_pengguna' => 'Perusahaan Pengguna',
            'id_ref_perusahaan_peminjam' => 'Perusahaan Peminjam',
            'id_ref_kriteria' => 'Kriteria',
            'id_ref_metode_pembayaran' => 'Metode Pembayaran',
            'nos_spk' => 'No SPK',
            'pagu' => 'Pagu',
            'nilai_kontrak' => 'Kontrak',
            'penanggungjawab_lapangan' => 'Penanggungjawab Lapangan',
            'penanggungjawab_administrasi' => 'Penanggungjawab Administrasi',
            'status_admin' => 'Status Admin',
            'status_teknis' => 'Status Teknis',
            'status_kak' => 'Status KAK',
            'status_proposal' => 'Status Proposal',
            'status_laporan_bulan' => 'Status Laporan Bulan',
            'status_rab' => 'Status RAB',
            'status_spk' => 'Status SPK',
            'status_ssp_ppn' => 'Status SSP PPN',
            'status_ssp_pph' => 'Status SSP PPH',
            'status_sp2d' => 'Status SP2D',
            'status_skb' => 'Status SKB',
            'status_bast' => 'Status BAST',
            'status_referensi_ta' => 'Status Referensi TA',
            'status_pembelian_barang' => 'Status Pembelian Barang',
            'administrasi' => 'Administrasi',
            'progress' => 'Progress Project',
            'keterangan' => 'Keterangan',
            'pajak_ppn' => 'Pajak PPN',
            'pajak_pph' => 'Pajak PPH',
            'rentang_waktu' => 'Rentang Waktu'
        ];
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
    public function getRefInstansi()
    {
        return $this->hasOne(RefInstansi::className(), ['id' => 'id_ref_instansi']);
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

     public function getRefMetodePembayaran()
    {
        return $this->hasOne(RefMetodePembayaran::className(), ['id' => 'id_ref_metode_pembayaran']);
        
    }

    public function getMetodeBayar()
    {
        if($this->id_ref_metode_pembayaran == 1 ){
            return 'Langsung';
        }else{
            return 'Termin';
        }
    }

    public function getProgress()
    {
        return $progress = $this->progress."%";
    }

    public function sudahTiga()
    {
        $jumlah = ProjekTermin::find()
            ->andWhere(['id_projek' => $this->id])
            ->count();

        if($jumlah >= 3){
            return true;
        }else{
            return false;
        }
    }

    public function getKak()
    {
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

    public function getDpp()
    {
        return $this->nilai_kontrak / 1.1;
    }
    public function getPpn()
    {
        return $this->getDpp() * 0.10 ;
    }
    public function getPph()
    {
        return $this->getDpp() * 0.2;
    }
    public function getNet()
    {
        return $this->getDpp() - $this->getPph();
    }

    public function getUrutanProject()
    {
    	$model = Projek::find()->orderby(['urutan' => SORT_DESC])->one();
    	if($model == NULL){
    		return 1;
    	}else{
    		return  $model->urutan +1;
    	}
    }

    public function getKodeproject()
    {
        $html = null;

        if($this->status == 'Pemenang'){
            $html .= '18.';
        }else{
            $html .= 'PP.';
        }if($this->id_ref_jenis_project == 1){
            $html .= 'L.';
        }else{
            $html .= 'P.';
        }if($this->jenis == 'Jasa'){
            $html .= 'J.';
        }else{
            $html .= 'B.';
        }
        $html .= '00'.$this->urutan.'-';
        if($this->id_ref_perusahaan_peminjam == NULL){
            $html .= 'A.';
        }else{
            $html .= 'B.';
        }
        $html .= $this->refPerusahaanPengguna->nama;

        return $html;
    }

    public function getRangeTime()
    { 
        $awal  = new DateTime($this->tanggal_mulai);
        $akhir = new DateTime($this->tanggal_selesai);
        $diff  = $awal->diff($akhir);

        $range_time = null;

        $range_time .= $diff->y . ' Tahun, ';
        $range_time .= $diff->m . ' Bulan, ';
        $range_time .= $diff->d . ' Hari ';
        
        return $range_time;

    }

    public function getDeadline()
    {
        $akhir = new DateTime($this->tanggal_selesai);
        $sekarang = new DateTime();
        $diff = $akhir->diff($sekarang);

        $deadline =null;

        $deadline .= $diff->y . ' Tahun, ';
        $deadline .= $diff->m . ' Bulan, ';
        $deadline .= $diff->d . ' Hari ';       

        return $deadline; 
    }
}