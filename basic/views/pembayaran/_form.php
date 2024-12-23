<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pembayaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_menu')->textInput() ?>

    <?= $form->field($model, 'id_konsumen')->textInput() ?>

    <?= $form->field($model, 'metode_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pembayaran')->textInput() ?>

    <?= $form->field($model, 'total_pembayaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
