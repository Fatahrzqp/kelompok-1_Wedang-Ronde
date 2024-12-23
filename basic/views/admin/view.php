<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Admin $model */

$this->title = $model->id_Admin;
$this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="admin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_Admin' => $model->id_Admin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_Admin' => $model->id_Admin], [
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
            'id_Admin',
            'Nama',
            'Telephone',
            'Email:email',
            'Owner_id_Owner',
        ],
    ]) ?>

</div>
