<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table nilaikuliah pilih salah satu anatar get() atau paginate(10)
        $nilai = DB::table('nilaikuliah')->get();
        // $keranjang = DB::table('keranjang_belanja')->paginate(10);
        // mengirim data keranjang ke view index
        return view('latihan_uas_cewek.index', ['nilai' => $nilai]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('latihan_uas_cewek.tambah');
    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/latihan_uas_cewek/nilaikuliah');
    }

    // method untuk hapus data nilaikuliah
    public function hapus($id)
    {
        // menghapus data nilaikuliah berdasarkan id yang dipilih
        DB::table('nilaikuliah')->where('id', $id)->delete();
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/latihan_uas_cewek/nilaikuliah');
    }

}
