<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\RefInstansi;
use app\models\RefJenisProjek;

/* @var $this yii\web\View */
/* @var $model app\models\ProjekSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projek-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id')->() ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'tahun') ?>

    <?= // $form->field($model, 'tanggal_mulai') ?>

    <?php // echo $form->field($model, 'tanggal_selesai') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php  echo $form->field($model, 'id_instansi') ?>

    <?php  echo $form->field($model, 'id_ref_jenis_project') ?>

    <?php // echo $form->field($model, 'id_ref_perusahaan_pengguna') ?>

    <?php // echo $form->field($model, 'id_ref_perusahaan_peminjam') ?>

    <?php // echo $form->field($model, 'id_ref_kriteria') ?>

    <?php // echo $form->field($model, 'nos_spk') ?>

    <?php // echo $form->field($model, 'penanggungjawab_lapangan') ?>

    <?php // echo $form->field($model, 'penanggungjawab_administrasi') ?>

    <?php // echo $form->field($model, 'status_admin') ?>

    <?php // echo $form->field($model, 'status_teknis') ?>

    <?php // echo $form->field($model, 'status_kak') ?>

    <?php // echo $form->field($model, 'status_proposal') ?>

    <?php // echo $form->field($model, 'status_laporan_bulan') ?>

    <?php // echo $form->field($model, 'status_rab') ?>

    <?php // echo $form->field($model, 'status_spk') ?>

    <?php // echo $form->field($model, 'status_spp_ppn') ?>

    <?php // echo $form->field($model, 'status_spp_pph') ?>

    <?php // echo $form->field($model, 'status_sp2d') ?>

    <?php // echo $form->field($model, 'status_skb') ?>

    <?php // echo $form->field($model, 'status_bast') ?>

    <?php // echo $form->field($model, 'status_referensi_ta') ?>

    <?php // echo $form->field($model, 'status_pembelian_barang') ?>

    <?php // echo $form->field($model, 'administrasi') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'pagu') ?>

    <?php // echo $form->field($model, 'nilai_kontrak') ?>

    <?php // echo $form->field($model, 'jenis') ?>

    <?php // echo $form->field($model, 'bulan') ?>

    <?php // echo $form->field($model, 'hari') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
