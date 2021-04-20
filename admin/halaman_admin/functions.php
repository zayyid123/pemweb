<?php

$conn = mysqli_connect('localhost', 'root', '', 'campingskuy');

function queryDataProcess($query) {
  global $conn;
  $result = mysqli_query($conn, $query);

  $dataList = [];

  while( $dataItem = mysqli_fetch_assoc($result) ) {
    $dataList[] = $dataItem;
  }

  return $dataList;
}

function updateDataKonsumen($data) {
  global $conn;

  $nik = $data["id_ksmn"];
  $nama = htmlspecialchars( $data["nm_ksmn"] );

  $updateQuery = 
  " UPDATE konsumen SET 
    NIK = '$nik',
    NAMAKONSUMEN = '$nama'
  WHERE NIK = '$nik'
  ";

  mysqli_query($conn, $updateQuery);

  // var_dump(mysqli_affected_rows($conn));

  return mysqli_affected_rows($conn);
}

function hapusDataKonsumen($nik) {
  global $conn;
  mysqli_query($conn, "DELETE FROM konsumen WHERE NIK='$nik' ");
  // var_dump(mysqli_affected_rows($conn));
  return mysqli_affected_rows($conn);
}

function updateTransaksi($data) {
  global $conn;

  $idTransaksi = $data["idTransaksi"];
  $idPegawai = $data["idPegawai"];
  $nik = $data["nik_ksmn"];
  $idDenda = $data["idDenda"];
  $tglPinjam = $data["tglPinjam"];
  $tglKembali = $data["tglKembali"];

  $formattedTglPinjam = new DateTime( $tglPinjam );
  $formattedTglKembali = new DateTime( $tglKembali );
  $durasiPinjam = $formattedTglPinjam->diff($formattedTglKembali)->d;

  $updateQuery = 
  " UPDATE transaksi SET 
    IDTRANSAKSI = '$idTransaksi',
    IDPEGAWAI = '$idPegawai',
    NIK = '$nik',
    IDDENDA = '$idDenda',
    TGLPINJAM = '$tglPinjam',
    TGLKEMBALI = '$tglKembali',
    DURASIPINJAM = '$durasiPinjam'
  WHERE IDTRANSAKSI = '$idTransaksi'
  ";

  mysqli_query($conn, $updateQuery);

  // var_dump(mysqli_affected_rows($conn));
  return mysqli_affected_rows($conn);
}

function hapusDataTransaksi ($idtransaksi) {
  global $conn;
  mysqli_query($conn, "DELETE FROM transaksi WHERE IDTRANSAKSI = '$idtransaksi' ");
  // var_dump(mysqli_affected_rows($conn));
  return mysqli_affected_rows($conn);
}

function tambahDataBarang($data) {
  global $conn;

  $namaBarang = htmlspecialchars( $data["nm_brg"] );
  $stokBarang = htmlspecialchars( $data["stok_brg"] );
  $biayaSewaBarang = htmlspecialchars( $data["hrg_brg"] );

  $gambarBarang = uploadGambar();
  if ( !$gambarBarang ) {
    return false;
  }

  $createQuery = 
    "INSERT INTO barang VALUES
      ('', '$namaBarang', '$gambarBarang', '$biayaSewaBarang', '$stokBarang')
    ";

  mysqli_query($conn, $createQuery);

  //var_dump(mysqli_affected_rows($conn));
  return mysqli_affected_rows($conn);
}

function uploadGambar() {
  $namaFile = $_FILES["gmbr_brg"]["name"];
  $ukuranFile = $_FILES["gmbr_brg"]["size"];
  $errorValue = $_FILES["gmbr_brg"]["error"];
  $tmpName = $_FILES["gmbr_brg"]["tmp_name"];

  if ($errorValue === 4) {
    echo "<script> 
            alert('Pilih gambar terlebih dahulu')
          </script>";
    return false;
  }

  $ektensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower( end($ekstensiGambar) );

  if ( !in_array($ekstensiGambar, $ektensiGambarValid) ) {
    echo "<script> 
            alert('Maaf, yang bisa diupload hanya gambar')
          </script>";
    return false;
  }

  if ( $ukuranFile > 1000000 ) {
    echo "<script> 
            alert('Maaf, Ukuran gambar yang diupload melebihi batas maksimum (1Mb) ')
          </script>";
    return false;
  }

  $namaFileTerbaru = uniqid().'.'.$ekstensiGambar;

  $destinationDir = 'halaman_admin/images/'.$namaFileTerbaru;
  move_uploaded_file($tmpName, $destinationDir);

  return $namaFileTerbaru;
}

function hapusDataBarang ($idbarang) {
  global $conn;
  mysqli_query($conn, "DELETE FROM barang WHERE IDBARANG = $idbarang ");
  //var_dump(mysqli_affected_rows($conn));
  return mysqli_affected_rows($conn);
}

function updateDataBarang ($data) {
  global $conn;

  $idBarang = $data["id_brg"];
  $namaBarang =  htmlspecialchars($data["nm_brg"]);
  $hargaBarang =  htmlspecialchars($data["hrg_brg"]);
  $stokBarang =  htmlspecialchars($data["stok_brg"]);
  $gambarBarangLama = $data["gmbr_brg_lama"];

  if ( $_FILES["gmbr_brg"]["error"] === 4 ) {
    $gambarBarang = $gambarBarangLama;
  } else {
    $gambarBarang = uploadGambar();
  }

  $updateQuery = 
  " UPDATE barang SET
    NAMABARANG = '$namaBarang',
    GAMBARBARANG = '$gambarBarang',
    HARGASEWABARANG = '$hargaBarang',
    STOKBARANG = '$stokBarang'
  WHERE IDBARANG = $idBarang
  ";

  mysqli_query($conn, $updateQuery);

  //var_dump(mysqli_affected_rows($conn));

  return mysqli_affected_rows($conn);

}

function hapusDataDetailTr($idDetailTr) {
  global $conn;
  mysqli_query($conn, "DELETE FROM detailtransaksi WHERE IDDETAILTRANSAKSI = $idDetailTr ");
  //var_dump(mysqli_affected_rows($conn));
  return mysqli_affected_rows($conn);
}

function updateDataDetailTr($data) {
  global $conn;

  $idDetailTr = $data["idDetailTr"];
  $idTransaksi = $data["idTransaksi"];
  $idBarang =  htmlspecialchars($data["idBarang"]);
  $jumlahPinjam = htmlspecialchars($data["jumlahPinjam"]);

  $updateQuery = 
  " UPDATE detailtransaksi SET
    IDTRANSAKSI = '$idTransaksi',
    IDBARANG = '$idBarang',
    JUMLAHPINJAM = '$jumlahPinjam'
  WHERE IDDETAILTRANSAKSI = $idDetailTr
  ";

  mysqli_query($conn, $updateQuery);

  //var_dump(mysqli_affected_rows($conn));
  return mysqli_affected_rows($conn);
}

?>