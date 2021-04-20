<?php 

require 'functions.php';

$idTransaksi = $_GET["idTransaksi"];

$dataTransaksi = queryDataProcess("SELECT * FROM transaksi WHERE IDTRANSAKSI = '$idTransaksi' ")[0];

//var_dump($dataTransaksi);

if ( isset($_POST["updateTransaksi"]) ) {
  if (updateTransaksi($_POST) > 0 ){
    $pesanBerhasil = 1;
  } else {
    $pesanBerhasil = -1;
  }
}

?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1>Halaman Pembaruan Data Transaksi Sewa</h1>
    </div>
  </div>

  <!-- <div class="row">
    <div class="col">
      <p>Silahkan mengisi form input di bawah ini</p>
    </div>
  </div> <br> -->
      <?php global $pesanBerhasil; ?>
      <?php if ( $pesanBerhasil === 1 ) { ?>
        <p>Pembaruan Data Berhasil! Untuk Melihat Daftar Data Transaksi, Klik <a href="?page=transaksi">Disini</a></p>
      <?php } else if ($pesanBerhasil === -1) { ?>
        <p>Maaf, Pembaruan Data Gagal, Silahkan Refresh Halaman Ini</p>
      <?php } ?>

  <div class="row">
    <div class="col-lg-5">
      <form action="" method="post">
        <div class="form-group">
          <label class="control-label" for="idTransaksi">ID Transaksi</label>
          <input type="text" name="idTransaksi" class="form-control" id="idTransaksi" readonly value="<?php echo $dataTransaksi["IDTRANSAKSI"]?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="idPegawai">ID Pegawai</label>
          <input type="text" name="idPegawai" class="form-control" id="idPegawai" readonly value="<?php echo $dataTransaksi["IDPEGAWAI"]?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="nik_ksmn">NIK</label>
          <input type="text" name="nik_ksmn" class="form-control" id="nik_ksmn" readonly value="<?php echo $dataTransaksi["NIK"]?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="idDenda">ID Denda</label>
          <select name="idDenda" id="idDenda" class="form-control">
            <option value="" selected disabled hidden>
              <?php echo $dataTransaksi["IDDENDA"]?>
            </option>
            <option value="1">Tidak Ada</option>
            <option value="3">Kerusakan Barang Ringan</option>
            <option value="4">Kerusakan Barang Parah</option>
            <option value="5">Kehilangan Barang</option>
            <option value="6">Keterlambatan Pengembalian 1 Hari</option>
            <option value="7">Keterlambatan Pengembalian 3 Hari</option>
            <option value="8">Keterlambatan Pengembalian 1 Minggu</option>
            <option value="10">Keterlambatan Pengembalian 1 Bulan</option>
          </select>
          <!-- <input type="text" name="idDenda" class="form-control" id="idDenda" readonly value=""> -->
        </div> 
        <div class="form-group">
          <label class="control-label" for="tglPinjam">Tanggal Pinjam</label>
          <input type="date" name="tglPinjam" class="form-control" id="tglPinjam" value="<?php echo $dataTransaksi["TGLPINJAM"]?>" readonly>
        </div>
        <div class="form-group">
          <label class="control-label" for="nik_ksmn">Tanggal Kembali</label>
          <input type="date" name="tglKembali" class="form-control" id="tglKembali" value="<?php echo $dataTransaksi["TGLKEMBALI"]?>" readonly>
        </div> <hr>
        
        <div class="form-footer">
          <button type="reset" class="btn btn-danger">Reset</button>
          <input type="submit" name="updateTransaksi" class="btn btn-success" value="Update">
        </div>
      </form>
    </div> 
  </div> 