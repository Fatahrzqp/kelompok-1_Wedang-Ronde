<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Konsumen $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="konsumen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Konsumen')->textInput() ?>

    <?= $form->field($model, 'nama_konsumen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_konsumen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone_konsumen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_id_menu')->textInput() ?>

    <?= $form->field($model, 'menu_harga_menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Admin_id_Admin')->textInput() ?>

    <?= $form->field($model, 'Pembayaran_idPembayaran')->textInput() ?>

    <?= $form->field($model, 'Pembayaran_id_menu')->textInput() ?>

    <?= $form->field($model, 'Pembayaran_id_konsumen')->textInput() ?>

    <?= $form->field($model, 'Pembayaran_metode_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pembayaran_tgl_pembayaran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
