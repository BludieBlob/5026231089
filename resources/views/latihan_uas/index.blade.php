@extends('template')
@section('title', 'Keranjang Belanja')
@section('Jumbotron', '5026231089 Yusuf Acala Sadurjaya Sri Krisna')
@section('konten')
    <h1>Keranjang Belanja</h1>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga/Item</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
        @foreach ($keranjang as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ number_format($k->Jumlah) }}</td>
                <td>Rp. {{ number_format($k->Harga) }}</td>
                <td>Rp. {{ number_format($k->Jumlah * $k->Harga) }}</td>
                <td>
                    <a href="/latihan_uas/keranjang-belanja/tambah" class="btn btn-warning">Beli</a>
                    <a href="/latihan_uas/keranjang-belanja/hapus/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
