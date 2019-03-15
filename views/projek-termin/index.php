<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

use yii\helpers\Html;
use yii\grid\GridView;
use aryelds\sweetalert\SweetAlert;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjekTerminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = 'Projek Termins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projek-termin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Projek Termin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_projek',
            'termin',
            'persen',
            'jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<script type="text/javascript">
yii.confirm = function (message, okCallback, cancelCallback) {
    
    swal({
            text: message,
            icon: 'warning',
            buttons : {
                cancel : {
                    text : "Oops! No",
                    value : null,
                    visible : true,
                    className : "",
                    closeModal : true
                },
                confirm : {
                    text : "Delete It Already",
                    value : true,
                    visible : true,
                    className : "",
                    closeModal : true
                }
            },
            closeOnClickOutside: true
    }).then((selection) => {
     if(selection){okCallback;}else{cancelCallback;}
    });
};

</script>