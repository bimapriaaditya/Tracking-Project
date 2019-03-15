<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\RefInstansi;
use app\models\User;
use aryelds\sweetalert\SweetAlert;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjekSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Tracking';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projek-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (User::isAdmin()): ?>
        <p>
            <?= Html::a('Create Projek', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'kode',
            'nama',
            [
                'attribute' => 'id_ref_instansi',
                'filter' => RefInstansi::getList(),
                'format' => 'raw',
                'value' => function($projek) 
                {
                   return $projek->refInstansi->nama;
                },
            ],
            'nos_spk',
            // 'status',
            // 'jenis',
            // 'tanggal_mulai',
            // 'tanggal_selesai',
            // 'tahun',
            /*[
                'attribute' => 'id_ref_jenis_project',
                'filter' => true,
                'format' => 'raw',
                'value' => function($projek)
                {
                    return $projek->refJenisProject->nama;
                }
            ],*/
            /*[
                'attribute' => 'id_ref_lokasi',
                'filter' => true,
                'format' => 'raw',
                'value' => function($projek)
                {
                    return $projek->refLokasi->nama;
                }
            ],*/
            //'id_ref_perusahaan_pengguna',
            //'id_ref_perusahaan_peminjam',
            //'id_ref_kriteria',
            //'penanggungjawab_lapangan',
            //'penanggungjawab_administrasi',
            //'status_admin',
            //'status_teknis',
            //'status_kak',
            //'status_proposal',
            //'status_laporan_bulan',
            //'status_rab',
            //'status_spk',
            //'status_spp_ppn',
            //'status_spp_pph',
            //'status_sp2d',
            //'status_skb',
            //'status_bast',
            //'status_referensi_ta',
            //'status_pembelian_barang',
            //'administrasi',
            //'keterangan',
            //'pagu',
            //'nilai_kontrak',

            [

                'value' => function($data) {
                    $list = null;
                    $list .= Html::a("<i class='glyphicon glyphicon-search'style='color:indigo;'></i>",['projek/view','id' => $data->id]).' ';
                    if (User::isAdmin()) {
                        $list .= Html::a("<i class='glyphicon glyphicon-edit' style='color:blue;'></i>",['projek/update','id' => $data->id]).' ';
                        $list .= Html::a("<i class='glyphicon glyphicon-trash'style='color:red;'></i>",['projek/delete','id' => $data->id],[
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ]
                            ]);
                    }
                    return $list;
                },
                'format' => 'raw',
                'headerOptions' => ['style' => 'width: 85px;'],
                'contentOptions' => ['style' => 'text-align: center;'],
            ],
        ],

    ]); 
   /* echo SweetAlert::widget([
        'options' => [
            'title' => "Are you sure?",
            'text' => "You will not be able to recover this imaginary file!",
            'type' => SweetAlert::TYPE_WARNING,
            'showCancelButton' => true,
            'confirmButtonColor' => "#DD6B55",
            'confirmButtonText' => "Yes, delete it!",
            'cancelButtonText' => "No, cancel plx!",
            'closeOnConfirm' => false,
            'closeOnCancel' => false
        ],
        'callbackJs' => new \yii\web\JsExpression(' function(isConfirm) {
            if (isConfirm) { 
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else { 
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        }')
    ]);*/
?>
</div>

