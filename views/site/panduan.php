<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Panduan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-panduan">
    <h1><?= Html::encode($this->title) ?></h1>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Lihat Panduan</button>

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Panduan Fishmart</h4>
        </div>

        <button type="button" class="btn btn-info btn-md" data-toggle="modal"  onclick="pembeli()">Pembeli</button>
        <button type="button" class="btn btn-info btn-md" data-toggle="modal" onclick="penjual()">Penjual</button>

        <div class="modal-body" id="penjual">
          <ul class="list-group">
          	<li class="list-group-item">1. Buat akun anda</li>
          	<li class="list-group-item">2. Isi data</li>
          	<li class="list-group-item">3. Buat toko anda</li>
          	<li class="list-group-item">4. Anda sudah menjadi pejual</li>
          </ul>
        </div>

        <div class="modal-body" id="pembeli">
          <ul class="list-group">
            <li class="list-group-item">1. Tambahkan barang yang ingin dibeli ke keranjang</li>
            <li class="list-group-item">2. Isi data diri anda</li>
            <li class="list-group-item">3. Pilih metode pembayaran</li>
            <li class="list-group-item">4. Lakukan pembayaran</li>
            <li class="list-group-item">5. Barang akan segera diproses penjual</li>
          </ul>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- akhir modal -->

<script>
function penjual() {
  var x = document.getElementById("penjual");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function pembeli() {
  var x = document.getElementById("pembeli");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</div>