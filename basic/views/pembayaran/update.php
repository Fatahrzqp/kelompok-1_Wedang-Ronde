<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pembayaran $model */

$this->title = 'Update Pembayaran: ' . $model->idPembayaran;
$this->params['breadcrumbs'][] = ['label' => 'Pembayarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPembayaran, 'url' => ['view', 'idPembayaran' => $model->idPembayaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembayaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
