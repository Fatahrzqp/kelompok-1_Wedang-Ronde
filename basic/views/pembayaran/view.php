<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pembayaran $model */

$this->title = $model->idPembayaran;
$this->params['breadcrumbs'][] = ['label' => 'Pembayarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pembayaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idPembayaran' => $model->idPembayaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idPembayaran' => $model->idPembayaran], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idPembayaran',
            'id_menu',
            'id_konsumen',
            'metode_pembayaran',
            'tgl_pembayaran',
            'total_pembayaran',
        ],
    ]) ?>

</div>
