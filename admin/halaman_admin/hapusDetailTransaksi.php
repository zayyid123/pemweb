<?php 

require "functions.php";

$idDetailTr = $_GET["idTransaksi"];

//var_dump($idDetailTr);

if ( hapusDataDetailTr($idDetailTr) > 0) { ?>
  <p>Penghapusan Data Detail Transaksi Berhasil! Silahkan Kembali Pada Halaman <a href="?page=transaksi">Data Detail Transaksi</a></p>
<?php } else { ?>
  <p>Penghapusan Data Gagal! Maaf Atas Ketidaknyamanan Ini</p>
  <p>Kembali Ke Halaman <a href="?page=transaksi">Data Detail Transaksi</a></p>
<?php } ?>