<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
    }
    public function biodata()
    {
        $nama = "Yusuf Acala";
        $umur = 20;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        return view('biodata',[
            'nama' => $nama,
            'umur' => $umur,
            'matkul' => $pelajaran
        ]);
    }

}
