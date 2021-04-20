<?php 

require 'functions.php';

if (isset($_POST["tambah_brg"])) {
  if(tambahDataBarang($_POST) > 0) {
    $pesanBerhasil = 1;
  } else{
    $pesanBerhasil = -1;
  }
}

?>

<?php global $pesanBerhasil; ?>
  <?php if ( $pesanBerhasil === 1) { ?>
    <div class="row">
      <div class="col">
        <p>Penambahan Data Barang Baru Berhasil! Untuk Melihat Daftar Barang Silahkan <a href="?page=data_barang">Disini</a></p>
      </div>
    </div>
  <?php } else if ($pesanBerhasil === -1) { ?>
    <div class="row">
      <div class="col">
        <p>Peambahan Data Barang Baru Gagal, Silahkan Refresh Halaman Ini</p>
      </div>
    </div>
  <?php } ?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1>Form Tambah Data Barang</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-7">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label class="control-label" for="nm_brg">Nama Barang</label>
          <input type="text" name="nm_brg" class="form-control" id="nm_brg" required="" autocomplete="off">
        </div>
        <div class="form-group">
          <label class="control-label" for="hrg_brg">Harga Barang</label>
          <input type="number" name="hrg_brg" class="form-control" id="hrg_brg" required="">
        </div>
        <div class="form-group">
          <label class="control-label" for="stok_brg">Stok Barang</label>
          <input type="number" name="stok_brg" class="form-control" id="stok_brg" required="">
        </div>
        <div class="form-group">
          <label class="control-label" for="gmbr_brg">Gambar</label>
          <input type="file" name="gmbr_brg" class="form-control" id="gmbr_brg" required="">
        </div> <hr>
        <div class="form-footer">
          <button type="reset" class="btn btn-danger">Reset</button>
          <input type="submit" name="tambah_brg" class="btn btn-success" value="Add">
        </div>
      </form>
    </div>
  </div>
</div>