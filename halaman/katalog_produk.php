<?php

require "logicBackend.php";

$daftarBarang = queryingProcess("SELECT * FROM barang");


// var_dump($imgSrc); die;
?>

<div class="container product-semua">
    <h1 class="tag_katalog">Katalog <span class="kuy">Produk</span></h1>
    <!-- card semua -->
    <br>
    <div class="row">
        <?php foreach ($daftarBarang as $itemBarang) { ?>
            <div class="col-lg-3">
                <div class="card">
                    <div style="text-decoration:none; color:black">
                        <img height="250" src="admin/halaman_admin/images/<?php echo $itemBarang["GAMBARBARANG"]; ?>" class="card-img-top">
                        <div class="card-body">
                            <h3><?php echo $itemBarang["NAMABARANG"]; ?></h3>
                            <p class="card-text mb-0">
                                Id Barang : <span id="idBarang"> <?php echo $itemBarang["IDBARANG"]; ?> </span> <br>
                                Stok : <?php echo $itemBarang["STOKBARANG"]; ?>
                            </p>
                            <table>
                                <tr>
                                    <td>Harga:</td>
                                    <td rowspan="2">
                                    </td>
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
        <!-- produk 1 -->

        <!-- produk 2 -->
        <!-- <div class="col-lg-3">
                    <div class="card">
                        <div style="text-decoration:none; color:black">
                            <img src="https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor.jpg?raw=true" class="card-img-top">
                            <div class="card-body">
                                <h3>Kompor Portable</h3>
                                <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel impedit, amet quibusdam iure voluptates iusto aspernatur aliquam similique esse nesciunt omnis sapiente possimus quos suscipit harum recusandae delectus, nulla odit.</p>
                                <br>
                                <table>
                                    <tr>
                                        <td>Harga:</td>
                                        <td rowspan="2">
                                            <a href="?page=produk">
                                                <button class="btn btn-primary">Sewa</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="price">Rp 156.000</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- produk 3 -->
        <!-- <div class="col-lg-3">
                    <div class="card">
                        <div style="text-decoration:none; color:black">
                            <img src="https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor.jpg?raw=true" class="card-img-top">
                            <div class="card-body">
                                <h3>Kompor Portable</h3>
                                <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel impedit, amet quibusdam iure voluptates iusto aspernatur aliquam similique esse nesciunt omnis sapiente possimus quos suscipit harum recusandae delectus, nulla odit.</p>
                                <br>
                                <table>
                                    <tr>
                                        <td>Harga:</td>
                                        <td rowspan="2">
                                            <a href="?page=produk">
                                                <button class="btn btn-primary">Sewa</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="price">Rp 156.000</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- produk 4 -->
        <!-- <div class="col-lg-3">
                    <div class="card">
                        <div style="text-decoration:none; color:black">
                            <img src="https://github.com/zayyid123/campingkuy/blob/main/image/produk/tas.jpg?raw=true" class="card-img-top">
                            <div class="card-body">
                                <h3>Tas Hiking</h3>
                                <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel impedit, amet quibusdam iure voluptates iusto aspernatur aliquam similique esse nesciunt omnis sapiente possimus quos suscipit harum recusandae delectus, nulla odit.</p>
                                <br>
                                <table>
                                    <tr>
                                        <td>Harga:</td>
                                        <td rowspan="2">
                                            <a href="?page=produk">
                                                <button class="btn btn-primary">Sewa</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="price">Rp 156.000</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- produk 5 -->
        <!-- <div class="col-lg-3">
                    <div class="card">
                        <div style="text-decoration:none; color:black">
                            <img src="https://github.com/zayyid123/campingkuy/blob/main/image/produk/tas.jpg?raw=true" class="card-img-top">
                            <div class="card-body">
                                <h3>Tas Hiking</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel impedit, amet quibusdam iure voluptates iusto aspernatur aliquam similique esse nesciunt omnis sapiente possimus quos suscipit harum recusandae delectus, nulla odit.</p>
                                <br>
                                <table>
                                    <tr>
                                        <td>Harga:</td>
                                        <td rowspan="2">
                                            <a href="?page=produk">
                                                <button class="btn btn-primary">Sewa</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="price">Rp 156.000</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- produk 6 -->
        <!-- <div class="col-lg-3">
                    <div class="card">
                        <div style="text-decoration:none; color:black">
                            <img src="https://github.com/zayyid123/campingkuy/blob/main/image/produk/tas.jpg?raw=true" class="card-img-top">
                            <div class="card-body">
                                <h3>Tas Hiking</h3>
                                <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel impedit, amet quibusdam iure voluptates iusto aspernatur aliquam similique esse nesciunt omnis sapiente possimus quos suscipit harum recusandae delectus, nulla odit.</p>
                                <br>
                                <table>
                                    <tr>
                                        <td>Harga:</td>
                                        <td rowspan="2">
                                            <a href="?page=produk">
                                                <button class="btn btn-primary">Sewa</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p class="price">Rp 156.000</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
    </div>
    <!-- akhir card -->
    <br>
    <hr>
</div>