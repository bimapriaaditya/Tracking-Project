<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProjekTermin */

$this->title = 'Update Termin';
?>
<div class="projek-termin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
