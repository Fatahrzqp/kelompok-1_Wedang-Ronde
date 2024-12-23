<?php

use app\models\Konsumen;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\KonsumenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Konsumens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konsumen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Konsumen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_Konsumen',
            'nama_konsumen',
            'alamat_konsumen',
            'telephone_konsumen',
            'menu_id_menu',
            //'menu_harga_menu',
            //'Admin_id_Admin',
            //'Pembayaran_idPembayaran',
            //'Pembayaran_id_menu',
            //'Pembayaran_id_konsumen',
            //'Pembayaran_metode_pembayaran',
            //'Pembayaran_tgl_pembayaran',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Konsumen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_Konsumen' => $model->id_Konsumen]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
