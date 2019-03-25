<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProjekTermin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projek-termin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_projek', [
		'options' => [
			'style' => 'display:none;'
		]
    ])->textInput() ?>

    <?= $form->field($model, 'termin')->dropdownList([ 1 => '1 Termin' , 2 => '2 Termin',3 => '3 Termin'],['prompt' => '-- Masukan Termin --', 'id' => 'termin_ok']) ?>

    <div class="persen">
        <?= $form->field($model, 'persen')->textInput() ?>
    </div>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 5],['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $(document.body).on('change', '#termin_ok', function (){
            var val = $('#termin_ok').val();
            $('.persen').show('slow');
            if(val == 3 ) {
                console.log(val);
                $('.persen').hide('slow');
            } 

        });
    });
</script>