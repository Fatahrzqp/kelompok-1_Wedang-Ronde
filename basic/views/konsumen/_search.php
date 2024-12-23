<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KonsumenSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="konsumen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_Konsumen') ?>

    <?= $form->field($model, 'nama_konsumen') ?>

    <?= $form->field($model, 'alamat_konsumen') ?>

    <?= $form->field($model, 'telephone_konsumen') ?>

    <?= $form->field($model, 'menu_id_menu') ?>

    <?php // echo $form->field($model, 'menu_harga_menu') ?>

    <?php // echo $form->field($model, 'Admin_id_Admin') ?>

    <?php // echo $form->field($model, 'Pembayaran_idPembayaran') ?>

    <?php // echo $form->field($model, 'Pembayaran_id_menu') ?>

    <?php // echo $form->field($model, 'Pembayaran_id_konsumen') ?>

    <?php // echo $form->field($model, 'Pembayaran_metode_pembayaran') ?>

    <?php // echo $form->field($model, 'Pembayaran_tgl_pembayaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
