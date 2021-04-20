<?php 

require 'functions.php';

$daftarTransaksi = queryDataProcess("SELECT * FROM transaksi");

$daftarDetailTransaksi = queryDataProcess("SELECT * FROM detailtransaksi");

//var_dump($daftarDetailTransaksi);

?>


<div class="data-transaksi">
    <div class="row">
        <div class="col">
            <h1>Halaman Data <span class="logo_data_transaksi">Transaksi</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <table class="sekat">
                <tr>
                    <td><label for="inputGroupSelect">Show  </label></td>
                    <td>
                        <select class="custom-select" id="inputGroupSelect" aria-label="Example select with button addon">
                            <option selected>2</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                    </td>
                    <!-- <td><label for="cari_transaksi">Search</label></td>
                    <td><input type="text" class="form-control pencarian "  id="cari_transaksi"></td> -->
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <td>No.</td>
                        <td>ID. Transaksi</td>
                        <td>NIK</td>
                        <td>ID Denda</td>
                        <!-- <td>Jumlah</td>
                        <td>Biaya Total <br> (Termasuk Denda)</td> -->
                        <td>Tanggal Sewa</td>
                        <td>Tanggal Kembali</td>
                        <td>Durasi Pinjam <br>(hari)</td>
                        <td>Aksi</td>
                    </thead>
                    <?php $no = 1 ?>
                    <?php foreach ($daftarTransaksi as $dataTransaksi) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $dataTransaksi["IDTRANSAKSI"];?></td>
                        <td><?php echo $dataTransaksi["NIK"];?></td>
                        <td><?php echo $dataTransaksi["IDDENDA"];?></td>
                        <!-- <td>3</td>
                        <td>Rp. 600.000,00</td> -->
                        <td><?php echo $dataTransaksi["TGLPINJAM"];?></td>
                        <td><?php echo $dataTransaksi["TGLKEMBALI"];?></td>
                        <td><?php echo $dataTransaksi["DURASIPINJAM"];?></td>
                        <td>
                            <!-- <button type="button" class="btn btn-success float-left tombol-aksi"><i class="far fa-eye"></i></button> -->
                            <a href="?page=updateTransaksi&idTransaksi=<?php echo $dataTransaksi["IDTRANSAKSI"] ?>" class="btn btn-info float-left tombol-aksi"><i class="fas fa-pen"></i></a>
                            <a href="?page=hapusTransaksi&idTransaksi=<?php echo $dataTransaksi["IDTRANSAKSI"] ?>" 
                                class="btn btn-danger float-left tombol-aksi"
                                onclick="return confirm('Apakah anda yakin? akan menghapus data transaksi dengan id transaksi `<?php echo $dataTransaksi["IDTRANSAKSI"]; ?>`?')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $no++ ?>
                    <?php } ?>
                    <!-- <tr>
                        <td>2</td>
                        <td>34243</td>
                        <td>zayyid</td>
                        <td>Tenda</td>
                        <td>3</td>
                        <td>Rp. 600.000,00</td>
                        <td>05/12/2021</td>
                        <td>05/22/2021</td>
                        <td>
                            <button type="button" class="btn btn-success float-left tombol-aksi"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn btn-info float-left tombol-aksi"><i class="fas fa-pen"></i></button>
                            <button type="button" class="btn btn-danger float-left tombol-aksi"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr> -->
                </table>
            </div>
        </div>
    </div>
</div>
<div class="data-transaksi">
    <div class="row">
        <div class="col">
            <h1>Halaman Data <span class="logo_data_transaksi">Detail Transaksi</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <table class="sekat">
                <tr>
                    <td><label for="inputGroupSelect">Show  </label></td>
                    <td>
                        <select class="custom-select" id="inputGroupSelect" aria-label="Example select with button addon">
                            <option selected>2</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                    </td>
                    <!-- <td><label for="cari_transaksi">Search</label></td>
                    <td><input type="text" class="form-control pencarian "  id="cari_transaksi"></td> -->
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <td>No.</td>
                        <td>ID Detail Transaksi</td>
                        <td>ID Transaksi</td>
                        <td>ID Barang</td>
                        <!-- <td>Jumlah</td>
                        <td>Biaya Total <br> (Termasuk Denda)</td> -->
                        <td>Jumlah Pinjam</td>
                        <!-- <td>Tanggal Kembali</td>
                        <td>Durasi Pinjam <br>(hari)</td> -->
                        <td>Aksi</td>
                    </thead>
                    <?php $no = 1 ?>
                    <?php foreach ($daftarDetailTransaksi as $dataTransaksi) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $dataTransaksi["IDDETAILTRANSAKSI"];?></td>
                        <td><?php echo $dataTransaksi["IDTRANSAKSI"];?></td>
                        <td><?php echo $dataTransaksi["IDBARANG"];?></td>
                        <!-- <td>3</td>
                        <td>Rp. 600.000,00</td> -->
                        <td><?php echo $dataTransaksi["JUMLAHPINJAM"];?></td>
                        <!-- <td><?php //echo $dataTransaksi["TGLKEMBALI"];?></td>
                        <td><?php //echo $dataTransaksi["DURASIPINJAM"];?></td> -->
                        <td>
                            <!-- <button type="button" class="btn btn-success float-left tombol-aksi"><i class="far fa-eye"></i></button> -->
                            <a href="?page=updateDetailTr&idTransaksi=<?php echo $dataTransaksi["IDDETAILTRANSAKSI"] ?>" class="btn btn-info float-left tombol-aksi"><i class="fas fa-pen"></i></a>
                            <a href="?page=hapusDetailTr&idTransaksi=<?php echo $dataTransaksi["IDDETAILTRANSAKSI"] ?>" 
                                class="btn btn-danger float-left tombol-aksi"
                                onclick="return confirm('Apakah anda yakin? akan menghapus data detail transaksi dengan id `<?php echo $dataTransaksi["IDDETAILTRANSAKSI"]; ?>`?')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $no++ ?>
                    <?php } ?>
                    <!-- <tr>
                        <td>2</td>
                        <td>34243</td>
                        <td>zayyid</td>
                        <td>Tenda</td>
                        <td>3</td>
                        <td>Rp. 600.000,00</td>
                        <td>05/12/2021</td>
                        <td>05/22/2021</td>
                        <td>
                            <button type="button" class="btn btn-success float-left tombol-aksi"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn btn-info float-left tombol-aksi"><i class="fas fa-pen"></i></button>
                            <button type="button" class="btn btn-danger float-left tombol-aksi"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr> -->
                </table>
            </div>
        </div>
    </div>
</div>