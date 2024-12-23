<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Konsumen $model */

$this->title = 'Update Konsumen: ' . $model->id_Konsumen;
$this->params['breadcrumbs'][] = ['label' => 'Konsumens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Konsumen, 'url' => ['view', 'id_Konsumen' => $model->id_Konsumen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="konsumen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
