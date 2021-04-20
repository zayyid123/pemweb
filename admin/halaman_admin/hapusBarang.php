<?php 

require "functions.php";

$idBarang = $_GET["idbarang"];

// var_dump($idBarang);
// var_dump($dataBarang);

if (hapusDataBarang($idBarang) > 0) { ?> 
  <p>Penghapusan Data Berhasil! Silahkan Melihat Perubahan Data Barang <a href="?page=data_barang">Disini</a></p>
<?php } else { ?>
  <p>Penghapusan Data Gagal! Maaf Atas Ketidaknyamanan Ini</p>
  <p>Kembali Ke Halaman <a href="?page=data_barang">Data Barang</a></p>
<?php } ?>
