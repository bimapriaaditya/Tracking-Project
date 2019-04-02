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
        <?= $form->field($model, 'persen')->textInput(['type' => 'number']) ?>
    </div>

    <?= $form->field($model,'ppn')->dropdownList(['prompt' => '-- PPN --', 1 => 'Sudah', 2 => 'Belum'],['id' => 'hasil_ppn']) ?>

     <div class="no_ppn">
          <?= $form->field($model,'no_ppn')->textInput() ?>
     </div>

     <?= $form->field($model,'pph')->dropdownList(['prompt' => '-- PPH --', 1 => 'Sudah', 2 => 'Belum'],['id' => 'hasil_pph']) ?> 

    <div class="no_pph">
        <?= $form->field($model,'no_pph')->textInput() ?>
    </div>   

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.no_ppn'). hide();
        $('.no_pph'). hide();
        $(document.body).on('change', '#termin_ok', function (){
            var val = $('#termin_ok').val();
            $('.persen').show(501);
            if(val == 3 ) {
                console.log(val);
                $('.persen').hide(501);
            } 

        });
        $(document.body).on('change', '#hasil_ppn', function(){
            var ppn = $('#hasil_ppn').val();
            if(ppn == 1){
                $('.no_ppn').show(501);
            }else{
                $('.no_ppn').hide(501);
            }
        })
        $(document.body).on('change', '#hasil_pph', function(){
            var pph = $('#hasil_pph').val();
            if(pph == 1){
                $('.no_pph').show(501);
            }else{
                $('.no_pph').hide(501);
            }
        })
    });
</script>