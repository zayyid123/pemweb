<?php

require 'functions.php';

$idBarang = $_GET["idbarang"];

$dataBarang = queryDataProcess("SELECT * FROM barang WHERE IDBARANG = $idBarang")[0];

if ( isset($_POST["update_brg"]) ) {
  if ( updateDataBarang($_POST) > 0 ) {
    $pesanBerhasil = 1;
  } else {
    $pesanBerhasil = -1;
  }
}

?>

<div class="container">
<?php global $pesanBerhasil; ?>
  <?php if ( $pesanBerhasil === 1) { ?>
    <div class="row">
      <div class="col">
        <p>Pembaruan Data Barang Berhasil! Untuk Melihat Daftar Barang Silahkan <a href="?page=data_barang">Disini</a></p>
      </div>
    </div>
  <?php } else if ($pesanBerhasil === -1) { ?>
    <div class="row">
      <div class="col">
        <p>Pembaruan Data Barang Gagal, Silahkan Refresh Halaman Ini</p>
      </div>
    </div>
  <?php } ?> <br>
  <div class="row">
    <div class="col">
      <h1>Form Update Data Barang</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-7">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label class="control-label" for="id_brg">ID Barang</label>
          <input type="text" name="id_brg" class="form-control" id="id_brg" readonly value="<?php echo $dataBarang["IDBARANG"]; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="nm_brg">Nama Barang</label>
          <input type="text" name="nm_brg" class="form-control" id="nm_brg" autocomplete="off" value="<?php echo $dataBarang["NAMABARANG"]; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="hrg_brg">Harga Barang</label>
          <input type="number" name="hrg_brg" class="form-control" id="hrg_brg" value="<?php echo $dataBarang["HARGASEWABARANG"]; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="stok_brg">Stok Barang</label>
          <input type="number" name="stok_brg" class="form-control" id="stok_brg" value="<?php echo $dataBarang["STOKBARANG"]; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="gmbr_brg">Gambar Barang</label> <br>
          <img src="halaman_admin/images/<?php echo $dataBarang["GAMBARBARANG"]?>" alt="" width="200"> <br>
          <input type="file" name="gmbr_brg" class="form-control" id="gmbr_brg">
          <input type="text" name="gmbr_brg_lama" id="gmbr_brg_lama" value="<?php echo $dataBarang["GAMBARBARANG"]?>" readonly>
        </div>
        <hr>
        <div class="form-footer">
          <button type="reset" class="btn btn-danger">Reset</button>
          <input type="submit" name="update_brg" class="btn btn-success" value="Update">
        </div>
      </form>
    </div>
  </div>
</div>