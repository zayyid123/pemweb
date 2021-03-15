<div class="data-barang ">
    <div class="row">
        <div class="col">
            <h1>Halaman <span class="logo_data_barang">Data Barang</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
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
                    <td><label for="cari_transaksi">Search</label></td>
                    <td><input type="text" class="form-control pencarian "  id="cari_transaksi"></td>
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
                        <td>Foto</td>
                        <td>Nama Barang</td>
                        <td>Harga</td>
                        <td>Stok</td>
                        <td>Aksi</td>
                    </thead>
                    <tr>
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
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_brg">
                Tambah Data
            </button>
            <div class="modal fade" id="tambah_brg" tabindex="-1" role="dialog" >
                <div class="modal-dialog" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label" for="nm_brg">Nama Barang</label>
                                    <input type="text" name="nm_brg"  class="form-control" id="nm_brg" required="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="hrg_brg">Harga Barang</label>
                                    <input type="number" name="hrg_brg"  class="form-control" id="hrg_brg" required="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="stok_brg">Stok Barang</label>
                                    <input type="number" name="stok_brg"  class="form-control" id="stok_brg" required="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="gmbr_brg">Gambar</label>
                                    <input type="file" name="gmbr_brg"  class="form-control" id="gmbr_brg" required="">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <input type="submit" name="tambah_brg" class="btn btn-success" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>