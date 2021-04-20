<?php 

require 'functions.php';

$idTransaksi = $_GET["idTransaksi"];

if (hapusDataTransaksi($idTransaksi) > 0) { ?>
  <p>Penghapusan Data Berhasil! Silahkan Kembali Pada Halaman <a href="?page=transaksi">Data Transaksi</a></p>
<?php } else { ?>
  <p>Penghapusan Data Gagal! Maaf Atas Ketidaknyamanan Ini</p>
  <p>Kembali Ke Halaman <a href="?page=transaksi">Data Transaksi</a></p>
<?php } ?>

