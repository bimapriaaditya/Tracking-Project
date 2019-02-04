<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\Projek */

$this->title = $model->kode;
// $this->params['breadcrumbs'][] = ['label' => 'Projeks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="projek-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php if (User::isAdmin()): ?> 
       <p>
           <?= Html::a('Update', ['update', 'id' => $model->id],['class' => 'btn btn-primary']); ?>
           <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]);?>
       </p>
    <?php endif ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode',
            'nama',
            'tahun',
            [
                'attribute' => 'id_ref_perusahaan_pengguna',
                'value' => @$model->refPerusahaanPengguna->nama
            ],
            [
                'attribute' => 'id_ref_perusahaan_peminjam',
                'value' => @$model->refPerusahaanPeminjam->nama
            ],
            'jenis',
            'tanggal_mulai',
            'tanggal_selesai',
            'status',
            [
                'attribute' => 'id_ref_lokasi',
                'value' => $model->refLokasi->nama
            ],
            [
                'attribute' => 'id_ref_instansi',
                'value' => $model->refInstansi->nama
            ],
            [
                'attribute' => 'id_ref_jenis_project',
                'value' => $model->refJenisProject->nama
            ],
            [   
                'attribute' => 'id_ref_kriteria',
                'value' => $model->refKriteria->nama
            ],
            'nos_spk',
            
            [
                'attribute' => 'pagu',
                'value' => "Rp. ".number_format($model->pagu,2)
            ],
            [   
                'attribute' => 'nilai_kontrak',
                'value' => "Rp. ".number_format($model->nilai_kontrak,2)
            ],
            'penanggungjawab_lapangan',
            'penanggungjawab_administrasi',
            'status_admin',
            'status_teknis',
            [
                'attribute' => 'status_kak',
                'value' => $model->getKak(),
                'format' => 'raw',
            ],
            [
                'attribute'=> 'status_proposal',
                'value' => $model->getProposal(),
                'format' => 'raw',
            ],
            [
                'attribute'=> 'status_laporan_bulan',
                'value' => $model->getLaporanBulanan(),
                'format' => 'raw',
            ],
            [
                'attribute'=> 'status_rab',
                'value' => $model->getRab(),
                'format' => 'raw',
            ],
            [
                'attribute'=> 'status_spk',
                'value' => $model->getSpk(),
                'format' => 'raw',
            ],
            [
                'attribute'=> 'status_spp_ppn',
                'value' => $model->getSppPpn(),
                'format' => 'raw',
            ],
            [
                'attribute'=> 'status_spp_pph',
                'value' => $model->getSppPph(),
                'format' => 'raw',
            ],
            [
                'attribute'=> 'status_sp2d',
                'value' => $model->getSp2d(),
                'format' => 'raw',
            ],
            [
                'attribute'=> 'status_skb',
                'value' => $model->getSkb(),
                'format' => 'raw',
            ],
            [
                'attribute'=> 'status_bast',
                'value' => $model->getBast(),
                'format' => 'raw',
            ],
            [
                'attribute'=> 'status_referensi_ta',
                'value' => $model->getReferensiTa(),
                'format' => 'raw',
            ],    
            'status_pembelian_barang',
            'administrasi',
            'keterangan',
        ],
    ]) 
    ?>
    <label>Progres Project : <?php echo $model->getProgress() ?></label>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar"style="width:<?php echo $model->getProgress() ?>;"> 
        </div>
    </div>
    <div>
        <a href="index.php"><button class="btn btn-info">Back</button></a>
    </div>
</div>