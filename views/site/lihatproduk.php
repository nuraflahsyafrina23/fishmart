<?php

/* @var $this yii\web\View */
/* @var $model app\models\Transaksi */


use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\db\Command;
use yii\helpers\Html;

$this->title = 'Produk';
$this->params['breadcrumbs'][] = $this->title;
$request = Yii::$app->request;

$id = $request->get('id');
$data = Yii::$app->db->createCommand("SELECT * FROM produk WHERE id_produk='".$id."'")->queryAll();
?>
<div class="site-about">
    <div class="row">
        <div class="col-md-3" style="margin-top: 30px">
            <div class="card" style="width: 25rem;">
                <img src="img/<?= $data[0]['img']?>" style="height: 210px; width: 100%" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-sm">
            <h3><?= $data[0]['nama_produk']?></h3>
            <h5>Penjual: <?= $data[0]['username']?></h5>
            <h4 style="margin-top: 70px">Harga: Rp.<?= $data[0]['harga']?></h4>
            <h4>Stok: <?= $data[0]['stok']?></h4>
            <div class="chart-form" style="margin-left: 20px">
                <?php $form = ActiveForm::begin(); ?>
                <div style="width: 70px">
                    <?= $form->field($model, 'total')->textInput() ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Beli Sekarang', ['class' => 'btn btn-success']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 70px">
        <div class="col-sm text-center">
            <h3>Ulasan</h3>
        </div>
    </div>
</div>
