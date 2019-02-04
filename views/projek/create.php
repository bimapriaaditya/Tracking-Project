<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Projek */

$this->title = 'Buat Projek: ';
$this->params['breadcrumbs'][] = ['label' => 'Project Tracking', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projek-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
