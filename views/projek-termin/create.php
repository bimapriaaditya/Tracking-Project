<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProjekTermin */

$this->title = 'Tambah Termin';	
?>
<div class="projek-termin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
