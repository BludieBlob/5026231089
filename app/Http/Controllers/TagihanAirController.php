<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class TagihanAirController extends Controller
{
    public function index()
    {
        $tagihan = DB::table('tagihan_air')->orderBy('ID')->get();
        return view('tagihan.index', compact('tagihan'));
    }

    public function create()
    {
        return view('tagihan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NoMeteran' => 'required|string|max:6|min:6|unique:tagihan_air,NoMeteran',
            'MeterAwal' => 'required|integer|min:0',
            'MeterAkhir' => 'required|integer|gte:MeterAwal|min:' . ($request->MeterAwal + 20),
        ]);

        DB::table('tagihan_air')->insert([
            'ID' => $request->ID,
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir,
        ]);

        return redirect()->route('tagihan.index')->with('success', 'Data tagihan berhasil ditambahkan.');
    }

}
