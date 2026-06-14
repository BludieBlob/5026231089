<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        // mengambil data dari table keranjang_belanja pilih salah satu anatar get() atau paginate(10)
        $keranjang = DB::table('keranjangbelanja')->get();
        // $keranjang = DB::table('keranjang_belanja')->paginate(10);
        // mengirim data keranjang ke view index
        return view('latihan_uas.index', ['keranjang' => $keranjang]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('latihan_uas.tambah');
    }

    // method untuk insert data ke table keranjang_belanja
    public function store(Request $request)
    {
        // insert data ke table keranjang_belanja
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kode_barang,
            'Jumlah' => $request->jumlah_pembelian,
            'Harga' => $request->harga_per_item,
        ]);
        // alihkan halaman ke halaman keranjang_belanja
        return redirect('/latihan_uas/keranjang-belanja');
    }

    // method untuk hapus data keranjang_belanja
    public function hapus($id)
    {
        // menghapus data keranjang_belanja berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('id', $id)->delete();
        // alihkan halaman ke halaman keranjang_belanja
        return redirect('/latihan_uas/keranjang-belanja');
    }

}
