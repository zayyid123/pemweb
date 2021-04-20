<?php 

require 'functions.php';

$idDetailTr = $_GET["idTransaksi"];

//var_dump($idDetailTr);
$dataDetailTr = queryDataProcess("SELECT * FROM detailtransaksi WHERE IDDETAILTRANSAKSI = $idDetailTr")[0];
$katalogBarang = queryDataProcess("SELECT * FROM barang");


//var_dump($dataDetailTr);

if ( isset($_POST["updateDetailTransaksi"]) ) {
  //var_dump($_POST);
  if (updateDataDetailTr($_POST) > 0 ) {
    $pesanBerhasil = 1;
  } else {
    $pesanBerhasil = -1;
  }
}


?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1>Pembaruan Data Detail Transaksi</h1>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <p>Silahkan mengisi form input di bawah ini</p>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-10">
      <form action="" method="post">
        <div class="form-group">
          <label class="control-label" for="idDetailTr">ID Detail Transaksi</label>
          <input type="text" name="idDetailTr" class="form-control" id="idDetailTr" readonly value="<?php echo $dataDetailTr["IDDETAILTRANSAKSI"]; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="idTransaksi">ID Transaksi</label>
          <input type="text" name="idTransaksi" class="form-control" id="idTransaksi" readonly value="<?php echo $dataDetailTr["IDTRANSAKSI"]; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="idBarang">ID Barang</label>
          <input type="number" name="idBarang" class="form-control" id="idBarang" autocomplete="off" value="<?php echo $dataDetailTr["IDBARANG"]; ?>">
        </div>
        <div class="row">
          <div class="col">
            <p>Anda Ingin melihat daftar barang untuk mengetahui ID Barang nya? silahkan di lihat
              <button type="button" class="btn btn-light" data-toggle="modal" data-target="#katalogBarang">
                Disini
              </button>
            </p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="jumlahPinjam">Jumlah Pinjam</label>
          <input type="number" name="jumlahPinjam" class="form-control" id="jumlahPinjam" value="<?php echo $dataDetailTr["JUMLAHPINJAM"]; ?>">
        </div>
        <hr>

        <?php global $pesanBerhasil; ?>
        <?php if ($pesanBerhasil === 1) { ?>
          <p>Pembaruan data detail transaksi berhasil! Silahkan dilihat <a href="?page=transaksi">disini</a></p> <br>
        <?php } else if ($pesanBerhasil === -1) { ?>
          <p>Maaf, pembaruan data detail transaksi gagal</p>
        <?php } ?>

        <div class="form-footer">
          <button type="reset" class="btn btn-danger">Reset</button>
          <input type="submit" name="updateDetailTransaksi" class="btn btn-success" value="Update">
        </div>
      </form>

      <div class="modal fade" id="katalogBarang">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">Daftar Katalog Barang</h4>
            </div>

            <div class="modal-body">
              <div class="container product-semua">
                <div class="row">
                  <?php foreach ($katalogBarang as $itemBarang) { ?>
                    <div class="col-lg-8">
                      <div class="card">
                        <div style="text-decoration:none; color:black">
                          <img height="250" src="halaman_admin/images/<?php echo $itemBarang["GAMBARBARANG"]; ?>" class="card-img-top">
                          <div class="card-body">
                            <h5><?php echo $itemBarang["NAMABARANG"]; ?></h5>
                            <p class="card-text mb-0">
                              Id Barang : <span id="idBarang"> <?php echo $itemBarang["IDBARANG"]; ?> </span> <br>
                              Stok : <?php echo $itemBarang["STOKBARANG"]; ?>
                            </p>
                            <table>
                              <tr>
                                <td>Harga:</td>
                              </tr>
                              <tr>
                                <td>
                                  <p class="price"> Rp <?php echo $itemBarang["HARGASEWABARANG"]; ?></p>
                                </td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    </div> <br>
  </div> <br>
</div>