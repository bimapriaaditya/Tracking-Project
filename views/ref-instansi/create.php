<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RefInstansi */

$this->title = 'Create Ref Instansi';
$this->params['breadcrumbs'][] = ['label' => 'Ref Instansis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-instansi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
