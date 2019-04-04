<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RefInstansiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instansi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-instansi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (User::isAdmin()): ?>
        <p>
            <?= Html::a('Tambah Instansi', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',

            [
                'value' => function($data) {
                    $list = null;
                    $list .= Html::a("<i class='glyphicon glyphicon-eye-open'style='color:indigo;'></i>",['ref-instansi/view','id' => $data->id]).' ';
                    if (User::isAdmin()) {
                        $list .= Html::a("<i class='glyphicon glyphicon-edit' style='color:blue;'></i>",['ref-instansi/update','id' => $data->id]).' ';
                        $list .= Html::a("<i class='glyphicon glyphicon-trash'style='color:red;'></i>",['ref-instansi/delete','id' => $data->id],[
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
    ]); ?>
</div>
