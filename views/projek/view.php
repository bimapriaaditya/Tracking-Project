<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\User;
use app\models\ProjekTermin;

/* @var $this yii\web\View */
/* @var $model app\models\Projek */

$this->title = $model->kode;
// $this->params['breadcrumbs'][] = ['label' => 'Projeks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php if (User::isAdmin()): ?> 
       <p>
            <?= Html::a('<i class="glyphicon glyphicon-arrow-left"></i> Kembali', ['projek/index'],['class' => 'btn btn-info']); ?>
           <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Update', ['update', 'id' => $model->id],['class' => 'btn btn-primary']); ?>
           <?= Html::a('<i class="glyphicon glyphicon-trash"></i> Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]);?>
       </p>
    <?php endif ?>

    <label>Progres Project : <?php echo $model->getProgress() ?></label>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar"style="width:<?php echo $model->getProgress() ?>;"> 
        </div>
    </div>

<div class="row">
    <div class="col-sm-6">
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
            ]
        ]); ?>
    </div>

    <div class="col-sm-6">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'penanggungjawab_administrasi',
                /*[
                    'attribute' => 'id_ref_metode_pembayaran',
                    'value' => $model->refMetodePembayaran->nama
                ],*/
                'status_admin',
                'status_teknis',
                /*[
                    'label'=> 'DPP',
                    'value' => "Rp. ". number_format($model->getDpp()).",00",
                    'format' => 'raw',
                ],
                [
                    'label'=> 'PPN',
                    'value' => "Rp. ". number_format($model->getPpn()).",00",
                    'format' => 'raw',
                ],
                [
                    'label'=> 'PPH',
                    'value' => "Rp. ". number_format($model->getPph()).",00",
                    'format' => 'raw',
                ],
                [
                    'label'=> 'NET',
                    'value' => "Rp. ". number_format($model->getNet()).",00",
                    'format' => 'raw',
                ], */
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
    ]) ?>
    </div>
</div>
<h2>Metode Pembayaran : <b><?php echo $model->getMetodeBayar() ?></b> </h2>
<?php 
    if($model->id_ref_metode_pembayaran == 1){
        echo DetailView::widget([
            'model' => $model,
            'attributes' => [
                [
                    'label'=> 'DPP',
                    'value' => "Rp. ". number_format($model->getDpp()).",00",
                    'format' => 'raw',
                ],
                [
                    'label'=> 'PPN',
                    'value' => "Rp. ". number_format($model->getPpn()).",00",
                    'format' => 'raw',
                ],
                [
                    'label'=> 'PPH',
                    'value' => "Rp. ". number_format($model->getPph()).",00",
                    'format' => 'raw',
                ],
                [
                    'label'=> 'NET',
                    'value' => "Rp. ". number_format($model->getNet()).",00",
                    'format' => 'raw',
                ]
            ]
        ]); 
    }elseif ($model->id_ref_metode_pembayaran == 2){
        if($model->sudahTiga() == true){
            echo '&nbsp;';
        }elseif(User::isAdmin()){
            echo '&nbsp;';
            echo Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Termin', ['projek-termin/create','id_projek' => $model->id],['class' => 'btn btn-success']);
        }?>
    <table class="table table-borderd table-hover">
        <thead>
            <tr>
                <th>Termin</th>
                <th>Progress Termin</th>
                <th>Hasil</th>
                <th>Keterangan</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach (ProjekTermin::find()
                ->andWhere(['id_projek' => $model->id])
                ->orderby(['termin' => SORT_ASC])
                ->all() as $ProjekTermin): ?>
                <tr>
                    <td><?= $ProjekTermin->termin; ?> Termin</td>
                    <td><?= $ProjekTermin->persen; ?>%</td>
                    <td>Rp.<?= number_format($ProjekTermin->jumlah)?>,00</td>
                    <td><?= $ProjekTermin->keterangan; 
                        if($ProjekTermin->keterangan == ''){
                            echo "-";
                        } ?>
                    </td>
                    <td><?= Html::a('<i class="glyphicon glyphicon-edit"></i> ', ['projek-termin/update', 'id' => $ProjekTermin->id]); ?>
                        <?= Html::a('<i class="glyphicon glyphicon-trash" style="color:red;"></i>',['projek-termin/delete','id' => $ProjekTermin->id],[
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ]
                            ]); 
                        ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </thead>
    </table>
    <?php foreach (ProjekTermin::find()
        ->andWhere(['id_projek' => $model->id])
        ->orderby(['termin' => SORT_ASC])
        ->all() as $NilaiTermin): ?>
        <div class="col-sm-4">
            <h3><b> Termin : <?php echo $NilaiTermin->termin; ?></b></h3>
            <?= DetailView::widget([
                    'model' => $NilaiTermin,
                    'attributes' => [
                        [   
                            'attribute' => 'nilai_kontrak',
                            'value' => "Rp. ".number_format($model->nilai_kontrak,2)
                        ],
                        [
                            'label' => 'Hasil Termin',
                            'value' => 'Rp.'. number_format($NilaiTermin->jumlah).',00',
                            'format' => 'raw',
                        ],
                        [
                            'label'=> 'DPP',
                            'value' => "Rp. ". number_format($NilaiTermin->getDppTermin()).",00",
                            'format' => 'raw',
                        ],
                        [
                            'label'=> 'PPN',
                            'value' => "Rp. ". number_format($NilaiTermin->getPpnTermin()).",00",
                            'format' => 'raw',
                        ],
                        [
                            'label'=> 'PPH',
                            'value' => "Rp. ". number_format($NilaiTermin->getPphTermin()).",00",
                            'format' => 'raw',
                        ],
                        [
                            'label'=> 'NET',
                            'value' => "Rp. ". number_format($NilaiTermin->getNetTermin()).",00",
                            'format' => 'raw',
                        ]
                    ]
                ]);
            ?> 
        </div>
    <?php endforeach ?>
<?php }
?>