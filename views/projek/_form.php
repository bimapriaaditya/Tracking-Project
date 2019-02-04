<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\RefLokasi;
use app\models\RefInstansi;
use app\models\RefJenisProjek;
use app\models\RefKriteria;
use app\models\RefPerusahaan;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Projek */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projek-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->textInput() ?>


    <?= $form->field($model, 'tanggal_mulai')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Tanggal Mulai Project'],
        'readonly' => true,
        'pluginOptions' => [
            'autoclose'=>true,
            'format'=>'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'tanggal_selesai')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Tanggal Berakhir Project'],
        'readonly' => true,
        'pluginOptions' => [
            'autoclose'=>true,
            'format'=>'yyyy-mm-dd'  
        ]
    ]);?>    

    <?= $form->field($model, 'jenis')->dropdownList([''=>'','Barang' => 'Barang','Jasa'=>'Jasa'],
    ['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropdownList([''=>'','Pemenang'=>'Pemenang', 'Potensi Project'=>'Potensi Project']);['maxlength' => true] ?>

    <?= $form->field($model, 'id_ref_lokasi')->dropdownList([''=>'' ,RefLokasi::getList()]); ?>    

    <?= $form->field($model, 'id_ref_instansi')->dropdownList([''=>'',RefInstansi::getlist()]); ?>

    <?= $form->field($model, 'id_ref_jenis_project')->dropdownList([''=>'' ,RefJenisProjek::getList()]); ?>

    <?= $form->field($model, 'id_ref_perusahaan_pengguna')->dropdownList([''=>'' ,RefPerusahaan::getList()]); ?>

    <?= $form->field($model, 'id_ref_perusahaan_peminjam')->dropdownList([''=>'' ,RefPerusahaan::getList()]); ?>

    <?= $form->field($model, 'id_ref_kriteria')->dropdownList([''=>'' ,RefKriteria::getList()]); ?>

    <?= $form->field($model, 'nos_spk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pagu')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'nilai_kontrak')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'penanggungjawab_lapangan')->textInput() ?>

    <?= $form->field($model, 'penanggungjawab_administrasi')->textInput() ?>

    <?= $form->field($model, 'status_admin')->textInput() ?>

    <?= $form->field($model, 'status_teknis')->textInput() ?>

    <?= $form->field($model, 'status_kak')->dropdownList(['' => '', 'Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah']) ?>

    <?= $form->field($model, 'status_proposal')->dropdownList(['' => '', 'Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah']) ?>

    <?= $form->field($model, 'status_laporan_bulan')->dropdownList(['' => '', 'Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah']) ?>

    <?= $form->field($model, 'status_rab')->dropdownList(['' => '', 'Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah']) ?>

    <?= $form->field($model, 'status_spk')->dropdownList(['' => '', 'Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah']) ?>

    <?= $form->field($model, 'status_spp_ppn')->dropdownList(['' => '', 'Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah']) ?>

    <?= $form->field($model, 'status_spp_pph')->dropdownList(['' => '', 'Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah']) ?>

    <?= $form->field($model, 'status_sp2d')->dropdownList(['' => '', 'Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah']) ?>

    <?= $form->field($model, 'status_skb')->dropdownList(['' => '', 'Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah']) ?>

    <?= $form->field($model, 'status_bast')->dropdownList(['' => '', 'Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah']) ?>

    <?= $form->field($model, 'status_referensi_ta')->dropdownList(['' => '', 'Belum' => 'Belum ', 'Proses' => 'Proses', 'Sudah' => 'Sudah']) ?>

    <?= $form->field($model, 'status_pembelian_barang')->textInput() ?>

    <?= $form->field($model, 'administrasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'progress')->textInput(['type' => 'number', 'placeholder' => 'Input dari 1-100']) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 5],['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

