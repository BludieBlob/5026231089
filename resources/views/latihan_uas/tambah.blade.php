@extends('template')
@section('title', 'Tambah ke Keranjang Belanja')
@section('konten')
<a href="/latihan_uas/keranjang-belanja" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Keranjang Belanja
        </div>

        <div class="card-body">
            <form action="/latihan_uas/keranjang-belanja/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="kode_barang" id="kode_barang" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlah_pembelian" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah_pembelian" id="jumlah_pembelian" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="harga_per_item" class="col-sm-2 col-form-label">Harga per Item</label>
                    <div class="col-sm-10">
                        <input type="number" name="harga_per_item" id="harga_per_item" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
