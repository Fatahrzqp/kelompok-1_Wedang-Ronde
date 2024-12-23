<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Owner $model */

$this->title = $model->id_Owner;
$this->params['breadcrumbs'][] = ['label' => 'Owners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="owner-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_Owner' => $model->id_Owner], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_Owner' => $model->id_Owner], [
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
            'id_Owner',
            'nama_owner',
            'alamat_owner',
            'telephone_owner',
        ],
    ]) ?>

</div>
