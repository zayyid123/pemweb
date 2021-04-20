<!-- produk .php -->
<div class="container produk-all">
    <div class="row">
        <div class="col navigasi">
            <a href="">home</a>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <a href="">kompor</a>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <a href="" class="text" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, sint.</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="img">
                <a class="cover-container" onclick="ubahcover()">
                    <img id="cover" src="https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor.jpg?raw=true" alt="produk" class="gmbrbesar">
                </a>
                <div class="overlay" id="gmbr-1">
                    <a onclick="tutup()"><i class="far fa-times-circle close"></i></a>
                    <img src="https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor.jpg?raw=true" alt="" class="gmbrbesar2">
                </div>
                <div class="img-slider">
                    <div class="slider1 float-left">
                        <a href="#gmbr-1"><img src="https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor.jpg?raw=true" alt="gambar" class="float-left" onClick="ubahGambar1()"></a>
                        <a href="#gmbr-1"><img src="https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor2.png?raw=true" alt="gambar" class="float-left" onClick="ubahGambar2()"></a>
                        <a href="#gmbr-1"><img src="https://github.com/zayyid123/campingkuy/blob/main/image/produk/kompor3.png?raw=true" alt="gambar" class="float-left" onClick="ubahGambar3()"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="keterangan">
                <hr>
                <h1 class="nama-barang">Kompor Portable</h1>
                <p class="">Disewa 3 Produk • 264x Dilihat</p>
                <hr>
                <table>
                    <tr>
                        <td>Harga Sewa</td>
                        <td>Rp. 50,0000</td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>27 produk</td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td class="plusminus">
                            <button class="plus">+</button>
                            <input disabled="" type="text" value="1" >
                            <button class="min" >-</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Sewa</td>
                        <td><input type="date" id="tanggal_sewa" placeholder="pilih tanggal"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Kembali</td>
                        <td><input type="date" id="tanggal_kembali" placeholder="pilih tanggal"></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>Rp. 59,000</td>
                    </tr>
                </table>
                <hr>
                <a href="?page=cart">
                    <button class="btn btn-warning pl-4 pr-4">Sewa</button>
                </a>
                <a href="#">
                    <button class="btn btn-primary" >Tambah ke Keranjang</button>
                </a>
                <hr>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="deskripsi">
            <h1>Deskripsi Barang</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, repudiandae! Modi voluptatem, unde quis voluptas officiis suscipit sint libero pariatur.

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quo ipsam, maiores sequi velit eaque!

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem modi possimus esse facere, aspernatur repudiandae ipsum! Modi officia maiores nulla.
        </div>
    </div>
</div>
<!-- akhir produk.php -->