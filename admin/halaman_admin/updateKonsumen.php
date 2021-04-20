<?php 

require 'functions.php';

$nik = $_GET["nik"];

$dataKonsumen = queryDataProcess("SELECT * FROM konsumen WHERE NIK = '$nik' ")[0];

// var_dump($dataKonsumen);

if ( isset($_POST["update_ksmn"]) ) {
  //updateDataKonsumen($_POST);

  if ( updateDataKonsumen($_POST) > 0 ) {
    $pesanBerhasil = 1;
  } else {
    $pesanBerhasil = -1;
  }
}

?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1>Pembaruan Data Konsumen </h1>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <p>Silahkan mengisi form input di bawah ini</p>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <form action="" method="post">
        <div class="form-group">
          <label class="control-label" for="id_ksmn">NIK : </label>
          <input type="text" name="id_ksmn" class="form-control" id="id_ksmn" required readonly value="<?php echo $dataKonsumen["NIK"]?>" >
        </div>
        <div class="form-group">
          <label class="control-label" for="nm_ksmn">Nama Konsumen</label>
          <input type="text" name="nm_ksmn" class="form-control" id="nm_ksmn" required autocomplete="off" value="<?php echo $dataKonsumen["NAMAKONSUMEN"]?>">
        </div> <hr>
        <div class="form-footer">
          <button type="reset" class="btn btn-danger">Reset</button>
          <input type="submit" name="update_ksmn" class="btn btn-success" value="Update">
        </div>
      </form> <br>
      <?php global $pesanBerhasil; ?>
      <?php if ( $pesanBerhasil === 1 ) { ?>
        <p>Pembaruan Data Berhasil! Untuk Melihat Daftar Data Konsumen, Klik <a href="?page=data_konsumen">Disini</a></p>
      <?php } else if ($pesanBerhasil === -1) { ?>
        <p>Maaf, Pembaruan Data Gagal, Silahkan Refresh Halaman Ini</p>
      <?php } ?>
      
    </div>
  </div> <br>

