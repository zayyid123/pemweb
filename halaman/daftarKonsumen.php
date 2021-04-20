<?php

require "logicBackend.php";

$pesanBerhasil = 2;

if (isset($_POST["tambah_ksmn"])) {

  if ( daftarKonsumen($_POST) > 0 ) {
    $daftarTransaksi = 1 ;
  } else {
    $daftarTransaksi = -1;
  }
}

?>


<div class="container">
  <div class="row">
    <div class="col">
      <h1>Pendaftaran Konsumen Baru</h1>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <p>Silahkan mengisi form input di bawah ini</p>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-5">
      <form action="" method="post">
        <div class="form-group">
          <label class="control-label" for="id_ksmn">NIK : </label>
          <input type="text" name="id_ksmn" class="form-control" id="id_ksmn" required readonly value="<?php echo uniqid(); ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="nm_ksmn">Nama Konsumen</label>
          <input type="text" name="nm_ksmn" class="form-control" id="nm_ksmn" required autocomplete="off">
        </div> <hr>
        <div class="form-footer">
          <button type="reset" class="btn btn-danger">Reset</button>
          <input type="submit" name="tambah_ksmn" class="btn btn-success" value="Daftar">
        </div>
      </form>
    </div>
  </div> <br>


  <?php global $daftarTransaksi; ?>
  <?php if ( $daftarTransaksi === 1) { ?>
    <div class="row">
      <div class="col">
        <p>Pendaftaran Konsumen Baru Berhasil! Apakah anda ingin melakukan transaksi sewa pertama kali? daftar <a href="?page=daftarTransaksi&nik=<?php echo $_POST["id_ksmn"] ?>">disini</a></p>
      </div>
    </div>
  <?php } else if ($daftarTransaksi === -1) { ?>
    <div class="row">
      <div class="col">
        <p>Pendaftaran Konsumen Baru Gagal, Silahkan Refresh Halaman Ini</p>
      </div>
    </div>
  <?php } ?>
</div>