<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Owner $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="owner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Owner')->textInput() ?>

    <?= $form->field($model, 'nama_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone_owner')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
