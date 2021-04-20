<?php 

require 'functions.php';

$nik = $_GET["nik"];

if ( hapusDataKonsumen($nik) > 0) { ?>
  <p>Penghapusan Data Berhasil! Silahkan Kembali Pada Halaman <a href="?page=data_konsumen">Data Konsumen</a></p>
<?php } else { ?>
  <p>Penghapusan Data Gagal! Maaf Atas Ketidaknyamanan Ini</p>
  <p>Kembali Ke Halaman <a href="?page=data_konsumen">Data Konsumen</a></p>
<?php } ?>