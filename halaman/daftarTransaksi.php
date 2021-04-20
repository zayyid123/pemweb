<?php

require "logicBackend.php";

$nik = $_GET["nik"];

if ( isset($_POST["tambahTransaksi"]) ) {
  // var_dump($_POST);
  $daftarDetailTransaksi = true;

  if ( daftarTransaksi($_POST) > 0 ) {
    $daftarDetailTransaksi;
  } else {
    $daftarDetailTransaksi = false;
  }
  // $formattedTglPinjam = new DateTime( $_POST["tglPinjam"] );
  // $formattedTglKembali = new DateTime( $_POST["tglKembali"] );
  // $durasiPinjam = $formattedTglPinjam->diff($formattedTglKembali)->d;


}

?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1>Pendaftaran Transaksi Baru</h1>
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
          <label class="control-label" for="idTransaksi">ID Transaksi</label>
          <input type="text" name="idTransaksi" class="form-control" id="idTransaksi" readonly value="<?php echo uniqid(); ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="idPegawai">ID Pegawai</label>
          <input type="text" name="idPegawai" class="form-control" id="idPegawai" readonly value="1">
        </div>
        <div class="form-group">
          <label class="control-label" for="nik_ksmn">NIK</label>
          <input type="text" name="nik_ksmn" class="form-control" id="nik_ksmn" readonly value="<?php echo $nik; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="idDenda">ID Denda</label>
          <input type="text" name="idDenda" class="form-control" id="idDenda" readonly value="1">
        </div> 
        <div class="form-group">
          <label class="control-label" for="tglPinjam">Tanggal Pinjam</label>
          <input type="date" name="tglPinjam" class="form-control" id="tglPinjam">
        </div>
        <div class="form-group">
          <label class="control-label" for="nik_ksmn">Tanggal Kembali</label>
          <input type="date" name="tglKembali" class="form-control" id="tglKembali">
        </div> <hr>
        
        <div class="form-footer">
          <button type="reset" class="btn btn-danger">Reset</button>
          <input type="submit" name="tambahTransaksi" class="btn btn-success" value="Daftar">
        </div>
      </form>
    </div>
  </div> <br>

  <?php if (isset($daftarDetailTransaksi) === true) { ?>
    <div class="row">
      <div class="col">
        <p>
          Pendaftaran Transaksi Baru Berhasil! 
          Apakah anda ingin melakukan transaksi lanjutan (barang yang dipinjam, jumlah pinjam) pertama kali? 
          daftar <a href="?page=daftarDetailTransaksi&idTransaksi=<?php echo $_POST["idTransaksi"] ?>">disini</a></p>
      </div>
    </div>
  <?php } ?>

</div>