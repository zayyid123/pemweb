<?php 
require "functions.php";

$jumlahBarang = queryDataProcess("SELECT COUNT(*) AS jumlahBarang FROM barang")[0]['jumlahBarang'];
$jumlahKonsumen = queryDataProcess("SELECT COUNT(*) AS jumlahKonsumen FROM konsumen")[0]['jumlahKonsumen'];
$jumlahTransaksi = queryDataProcess("SELECT COUNT(*) AS jumlahTransaksi FROM transaksi")[0]['jumlahTransaksi'];

?>

<div class="dashboard">
    <div class="row">
        <div class="col">
            <h1>Halaman <span class="logo_dashboard">Dashboard</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card text-dark bg-light mb-3 pesanan" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title ">Pesanan Masuk</h5>
                    <p class="card-text "><?php echo $jumlahTransaksi ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-dark bg-light mb-3 konsumen" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title ">Konsumen</h5>
                    <p class="card-text "><?php echo $jumlahKonsumen ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-dark bg-light mb-3 produk" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title ">Produk</h5>
                    <p class="card-text "> <?php echo $jumlahBarang ?> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Pesanan Masuk
                </div>
                    <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <td>ID. Transaksi</td>
                                <td>Nama</td>
                                <td>Total</td>
                            </thead>
                            <tr>
                                <td>83248</td>
                                <td>zayyid</td>
                                <td>Rp. 500.000,00</td>
                            </tr>
                            <tr>
                                <td>83248</td>
                                <td>zayyid</td>
                                <td>Rp. 500.000,00</td>
                            </tr>
                        </table>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Tentang Camping<span class="kuy">Kuy</span>
                </div>
                    <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>