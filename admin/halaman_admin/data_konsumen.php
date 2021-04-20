<?php

require "functions.php";

$daftarKonsumen = queryDataProcess("SELECT * FROM konsumen");

?>

<div class="data-konsumen">
    <div class="row">
        <div class="col">
            <h1>Halaman <span class="logo_data_konsumen">Data Konsumen</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="sekat">
                <tr>
                    <td><label for="inputGroupSelect">Show </label></td>
                    <td>
                        <select class="custom-select" id="inputGroupSelect" aria-label="Example select with button addon">
                            <option selected>2</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                    </td>
                    <td><label for="cari_transaksi">Search</label></td>
                    <td><input type="text" class="form-control pencarian " id="cari_transaksi"></td>
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
                        <td>NIK</td>
                        <td>Nama Konsumen</td>
                        <!-- <td>E-mail</td>
                        <td>Password</td> -->
                        <td>Aksi</td>
                    </thead>
                    <?php $no = 1 ?>
                    <?php foreach ($daftarKonsumen as $konsumen) { ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $konsumen["NIK"] ?></td>
                            <td><?php echo $konsumen["NAMAKONSUMEN"] ?></td>
                            <!-- <td>zay@yahii.com</td>
                        <td>****</td> -->
                            <td>
                                <!-- <button type="button" class="btn btn-success float-left tombol-aksi"><i class="far fa-eye"></i></button> -->
                                <a href="?page=updateKonsumen&nik=<?php echo $konsumen["NIK"] ?>" class="btn btn-info float-left tombol-aksi"><i class="fas fa-pen"></i></a>
                                <a  href="?page=hapusKonsumen&nik=<?php echo $konsumen["NIK"] ?>" 
                                    class="btn btn-danger float-left tombol-aksi"
                                    onclick="return confirm('Apakah anda yakin? akan menghapus data konsumen atas nama `<?php echo $konsumen["NAMAKONSUMEN"]?>` ?')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $no++ ?>
                    <?php } ?>
                    <!-- <div class="modal fade" id="update_ksmn" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Data Konsumen</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php //foreach ($daftarKonsumen as $dataKonsumen) { ?>
                                    <form action="" method="POST">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label class="control-label" for="id_ksmn">NIK : </label>
                                                <input type="text" name="id_ksmn" class="form-control" id="id_ksmn" readonly value="<?php echo $dataKonsumen["NIK"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="nm_ksmn">Nama Konsumen</label>
                                                <input type="text" name="nm_ksmn" class="form-control" id="nm_ksmn" required value="<?php echo $dataKonsumen["NAMAKONSUMEN"] ?>" autocomplete="OFF">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                            <input type="submit" name="update_ksmn" class="btn btn-success" value="Save">
                                        </div>
                                    </form>
                                <?php //} ?>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="form-group">
                                    <label class="control-label" for="pw_ksmn;">Password</label>
                                    <input type="password" name="pw_ksmn"  class="form-control" id="pw_ksmn" required  autocomplete="on">
                                </div>
                    <!-- <tr>
                        <td>2</td>
                        <td>ini foto</td>
                        <td>zayyid</td>
                        <td>zay@yahii.com</td>
                        <td>****</td>
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
    <!-- <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_ksmn">
                Tambah Data
            </button>
            <div class="modal fade" id="tambah_ksmn" tabindex="-1" role="dialog" >
                <div class="modal-dialog" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Konsumen</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label" for="id_ksmn;">NIK : </label>
                                    <input  type="text" name="id_ksmn"  
                                            class="form-control" id="id_ksmn" 
                                            required readonly value="<?php //echo uniqid();
                                                                        ?>"
                                    >
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="nm_ksmn">Nama Konsumen</label>
                                    <input type="text" name="nm_ksmn"  class="form-control" id="nm_ksmn" required>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="control-label" for="pw_ksmn;">Password</label>
                                    <input type="password" name="pw_ksmn"  class="form-control" id="pw_ksmn" required  autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="gmbr_ksmn">Foto</label>
                                    <input type="file" name="gmbr_ksmn"  class="form-control" id="gmbr_ksmn" required>
                                </div> -->
    <!-- </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <input type="submit" name="tambah_ksmn" class="btn btn-success" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>