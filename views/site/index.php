<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\bootstrap\Carousel;
$this->title = 'E-Learning';
?>
<style>
    #img-cr {
        height: 500px;
    }
    .card {
        background-color: whitesmoke; width: 35rem;padding: 15px; 
        box-shadow: 8px 9px 6px 0px #00000042; margin: 0;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            <h1>Fish Mart</h1>
        </div>
        <div class="col-md-8" style="margin-left: 190px">
            <?php
                echo Carousel::widget([
                    'items' => [
                        // the item contains only the image
                        '<img id="img-cr" src="img/fishsale.png"/>',
                    ]
                ]);
            ?>
        </div>
    </div>
    <div class="row text-center" style="margin-top: 50px">
        <div class="col-sm">
            <h4>Produk Terbaru</h4>
        </div>
    </div>
    <div class="row" style="margin-top: 150px; margin-left: 100px" >
        <?php foreach ($data as $row) :?>
            <div class="col-md-3" style="margin-top: 30px">
                <div class="card" style="width: 25rem;">
                    <img src="img/<?= $row['img']?>" style="height: 180px; width: 100%" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text"><?= $row['nama_produk'] ?><br>Harga: Rp.<?= $row['harga'] ?></p>
                        <a href="<?= Url::to(['site/lihatproduk', 'id' => $row['id_produk']]); ?>" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        
    </div>
</div>

