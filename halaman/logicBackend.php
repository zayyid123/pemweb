<?php 

$conn = mysqli_connect('localhost', 'root', '', 'campingskuy');

function queryingProcess ($query) {
  global $conn;
  $result = mysqli_query($conn, $query);

  $datas = [];

  while ( $dataItem = mysqli_fetch_assoc($result) ) {
    $datas[] = $dataItem;
  }

  return $datas;
}

function daftarKonsumen ($data) {
  global $conn;

  $nik = htmlspecialchars( $data["id_ksmn"] );
  $namaKonsumen = htmlspecialchars( $data["nm_ksmn"] );

  $createQuery = 
  "INSERT INTO konsumen VALUES 
    ('$nik', '$namaKonsumen')
  ";

  mysqli_query($conn, $createQuery);

  return mysqli_affected_rows($conn);
}

function daftarTransaksi ($data) {
  global $conn;

  $idTransaksi = htmlspecialchars( $data["idTransaksi"] );
  $idPegawai = htmlspecialchars( $data["idPegawai"] );
  $idKonsumen = htmlspecialchars( $data["nik_ksmn"] );
  $idDenda = htmlspecialchars( $data["idDenda"] );
  $tglPinjam = htmlspecialchars( $data["tglPinjam"] );
  $tglKembali = htmlspecialchars( $data["tglKembali"] );

  $formattedTglPinjam = new DateTime( $tglPinjam );
  $formattedTglKembali = new DateTime( $tglKembali );
  $durasiPinjam = $formattedTglPinjam->diff($formattedTglKembali)->d;

  $createQuery = 
  "INSERT INTO transaksi VALUES
  ('$idTransaksi', '$idPegawai', '$idKonsumen', '$idDenda', '$tglPinjam', '$tglKembali', '$durasiPinjam')
  ";

  mysqli_query($conn, $createQuery);

  return mysqli_affected_rows($conn);
}

function daftarDetailTransaksi ($data) {
  global $conn;

  $idTransaksi = $data["idTransaksi"];
  $idBarang = $data["idBarang"];
  $jumlahPinjam = $data["jumlahPinjam"];

  $createQuery = 
  "INSERT INTO detailtransaksi VALUES
  ('', '$idTransaksi', '$idBarang', '$jumlahPinjam')
  ";

  mysqli_query($conn, $createQuery);

  //var_dump(mysqli_affected_rows($conn));

  return mysqli_affected_rows($conn);
}