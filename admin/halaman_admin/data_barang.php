<?php

require "functions.php";

$daftarBarang = queryDataProcess("SELECT * FROM barang");

// if (isset($_POST["tambah_brg"])) {
//     $nmBrg = $_POST["nm_brg"];
//     $stokBrg = $_POST["stok_brg"];
//     $hargaBrg = $_POST["hrg_brg"];
//     $fileGambarBrg = $_FILES["gmbr_brg"];

//     $namaFile = $fileGambarBrg["name"];
//     $errorCode = $fileGambarBrg["error"];
//     $tmpDir = $fileGambarBrg["tmp_name"];

//     // var_dump($namaFile); var_dump($errorCode); var_dump($tmpDir);

//     $fileExt = explode('.', $namaFile);
//     $checkFile = strtolower(end($fileExt));

//     // var_dump($fileExt); var_dump($checkFile);

//     $fileValidExt = ['jpg', 'jpeg', 'png'];

//     if (in_array($checkFile, $fileValidExt)) {
//         $namaFileTerbaru = uniqid().'.'.$checkFile;
//         $destination = 'halaman_admin/img_barang/' . $namaFileTerbaru;
//         move_uploaded_file($tmpDir, $destination);
//     }
// }


?>


<div class="data-barang ">
    <div class="row">
        <div class="col">
            <h1>Halaman <span class="logo_data_barang">Data Barang</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="sekat">
                <form action="" method="post">
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
                        <td><label for="cari_barang">Search</label></td>
                        <td><input type="text" class="form-control pencarian " id="cari_barang" name=""></td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <td>No.</td>
                        <td>Id Barang</td>
                        <td>Foto</td>
                        <td>Nama Barang</td>
                        <td>Harga</td>
                        <td>Stok</td>
                        <td>Aksi</td>
                    </thead>
                    <?php $no = 1 ?>
                    <?php foreach ($daftarBarang as $itemBarang) { ?>
                        <tr>
                            <td> <?php echo $no; ?> </td>
                            <td> <?php echo $itemBarang["IDBARANG"]; ?> </td>
                            <td>
                                <img height="200" src="halaman_admin/images/<?php echo $itemBarang["GAMBARBARANG"]?>" alt="<?php echo $itemBarang["GAMBARBARANG"]; ?>" />
                            </td>
                            <td> <?php echo $itemBarang["NAMABARANG"]; ?> </td>
                            <td> <?php echo $itemBarang["HARGASEWABARANG"]; ?> </td>
                            <td> <?php echo $itemBarang["STOKBARANG"] ?> </td>
                            <td>
                                <!-- <button type="button" class="btn btn-success float-left tombol-aksi"><i class="far fa-eye"></i></button> -->
                                <a href="?page=updateBarang&idbarang=<?php echo $itemBarang['IDBARANG']?>" class="btn btn-info float-left tombol-aksi"><i class="fas fa-pen"></i></a>
                                <a href="?page=hapusBarang&idbarang=<?php echo $itemBarang['IDBARANG']?>" class="btn btn-danger float-left tombol-aksi" onclick="return confirm('Apakah anda yakin? akan menghapus data barang <?php echo $itemBarang["NAMABARANG"]?> ?')" ><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php $no++ ?>
                    <?php } ?>

                    <!-- <tr>
                        <td>1</td>
                        <td>ini foto</td>
                        <td>Tenda</td>
                        <td>Rp. 200,000,00</td>
                        <td>3</td>
                        <td>
                            <button type="button" class="btn btn-success float-left tombol-aksi"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn btn-info float-left tombol-aksi"><i class="fas fa-pen"></i></button>
                            <button type="button" class="btn btn-danger float-left tombol-aksi"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ini foto</td>
                        <td>Tenda</td>
                        <td>Rp. 200,000,00</td>
                        <td>3</td>
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
    <div class="row">
        <div class="col">
            <a href="?page=tambahBarang" class="btn btn-primary">
                Tambah Data
            </a>
        </div>
    </div>
</div>