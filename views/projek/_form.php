<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\JqueryAsset;
use kartik\date\DatePicker;
use app\models\RefLokasi;
use app\models\RefInstansi;
use app\models\RefJenisProjek;
use app\models\RefKriteria;
use app\models\RefPerusahaan;
use app\models\RefMetodePembayaran;


/* @var $this yii\web\View */
/* @var $model app\models\Projek */
/* @var $form yii\widgets\ActiveForm */


?>
<?php $form = ActiveForm::begin(); ?>
<div class="projek-form">
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'tahun')->textInput() ?>

            <?= $form->field($model, 'tanggal_mulai')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Tanggal Mulai Project'],
                'readonly' => true,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format'=>'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
            ]);?>

            <?= $form->field($model, 'tanggal_selesai')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Tanggal Berakhir Project'],
                'readonly' => true,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format'=>'yyyy-mm-dd',
                    'todayHighlight' => true  
                ]
            ]);?>    

            <?= $form->field($model, 'jenis')->dropdownList(['' => '--JenisProject--','Barang' => 'Barang','Jasa'=>'Jasa'],
            ['maxlength' => true]); ?>

            <?= $form->field($model, 'status')->dropdownList(['' => '--StautsProject--','Pemenang'=>'Pemenang', 'Potensi Project'=>'Potensi Project'],['maxlength' => true],['prompt' => '--Status Project--']); ?>

            <?= $form->field($model, 'id_ref_lokasi')->dropdownList(RefLokasi::getList(),['prompt' => '--Lokasi--']); ?>    

            <?= $form->field($model, 'id_ref_instansi')->dropdownList(RefInstansi::getlist(),['prompt' => '--Jenis Instansi--']); ?>

            <?= $form->field($model, 'id_ref_jenis_project')->dropdownList(RefJenisProjek::getList(),['prompt' => '--Jenis Project--']); ?>

            <?= $form->field($model, 'id_ref_perusahaan_pengguna')->dropdownList(RefPerusahaan::getList(),['prompt' => '--Perusahaan Pengguna--']); ?>

            <?= $form->field($model, 'id_ref_perusahaan_peminjam')->dropdownList(RefPerusahaan::getList(),['prompt' => '--Perusahaan Peminjam--']); ?>

            <?= $form->field($model, 'id_ref_kriteria')->dropdownList(RefKriteria::getList(),['prompt' => '--Kriteria Project--']); ?>

            <?= $form->field($model, 'nos_spk')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'pagu')->textInput(['type' => 'number']) ?>

            <?= $form->field($model, 'nilai_kontrak')->textInput(['type' => 'number']) ?>

            <?= $form->field($model, 'penanggungjawab_lapangan')->textInput() ?>

            <?= $form->field($model, 'penanggungjawab_administrasi')->textInput() ?>

        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'status_admin')->textInput() ?>

            <?= $form->field($model, 'status_teknis')->textInput() ?>
            
            <?= $form->field($model, 'id_ref_metode_pembayaran')->dropdownList(RefMetodePembayaran::getList(),['prompt' => '-- Pilih Metode Pembayaran --']) ?> 

            <?= $form->field($model, 'status_kak')->dropdownList(['Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah'],['prompt' => '-- Status KAK --']) ?>

            <?= $form->field($model, 'status_proposal')->dropdownList(['Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah'],['prompt' => '-- Status Proposal --']) ?>

            <?= $form->field($model, 'status_laporan_bulan')->dropdownList(['Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah'],['prompt' => '-- Laporan Bulanan --']) ?>

            <?= $form->field($model, 'status_rab')->dropdownList(['Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah'],['prompt' => '-- Status RAB --']) ?>

            <?= $form->field($model, 'status_spk')->dropdownList(['Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah'],['prompt' => '-- Status SPK --']) ?>

            <?= $form->field($model, 'status_sp2d')->dropdownList(['Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah'],['prompt' => '-- Status SP2D --']) ?>

            <?= $form->field($model, 'status_skb')->dropdownList(['Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah'],['prompt' => '-- Status SKB --']) ?>

            <?= $form->field($model, 'status_bast')->dropdownList(['Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah'],['prompt' => '-- Status BAST --']) ?>

            <?= $form->field($model, 'status_referensi_ta')->dropdownList(['Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah'],['prompt' => '-- Status Referensi TA --']) ?>

            <?= $form->field($model, 'status_pembelian_barang')->textInput() ?>

            <?= $form->field($model, 'administrasi')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'progress')->textInput(['type' => 'number', 'placeholder' => 'Input dari 1-100']) ?>

            <?= $form->field($model, 'keterangan')->textarea(['rows' => 5],['maxlength' => true]) ?>
        </div>
    </div>
</div>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>
<?php ActiveForm::end(); ?>

<!-- <script type="text/javascript">
    $(document).ready(function () {
        $('.nomor_ppn').hide();
        $(document.body).on('change', '#list_ppn', function (){
            var val = $('#list_ppn').val();
            $('.nomor_ppn').hide('slow');
            if(val == 'Sudah' ) {
                console.log(val);
                $('.nomor_ppn').toggle('slow');
            } 

        });
        $('.nomor_pph').hide();
        $(document.body).on('change', '#list_pph', function () {
            var val = $('#list_pph').val();
            $('.nomor_pph').hide('slow');
            if(val == 'Sudah' ) {
                console.log(val);
                $('.nomor_pph').toggle('slow');
            }
        });
    });
</script> -->