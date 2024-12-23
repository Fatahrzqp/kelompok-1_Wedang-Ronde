<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Konsumen $model */

$this->title = $model->id_Konsumen;
$this->params['breadcrumbs'][] = ['label' => 'Konsumens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="konsumen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_Konsumen' => $model->id_Konsumen], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_Konsumen' => $model->id_Konsumen], [
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
            'id_Konsumen',
            'nama_konsumen',
            'alamat_konsumen',
            'telephone_konsumen',
            'menu_id_menu',
            'menu_harga_menu',
            'Admin_id_Admin',
            'Pembayaran_idPembayaran',
            'Pembayaran_id_menu',
            'Pembayaran_id_konsumen',
            'Pembayaran_metode_pembayaran',
            'Pembayaran_tgl_pembayaran',
        ],
    ]) ?>

</div>
