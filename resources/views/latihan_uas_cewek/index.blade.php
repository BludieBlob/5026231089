@extends('template')
@section('title', 'Nilai Kuliah')
@section('konten')
    <h1>Nilai Kuliah</h1>
    <a href="/latihan_uas_cewek/nilaikuliah/tambah" class="btn btn-primary">+ Tambah Nilai Baru</a>
    <br />
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilai as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NilaiAngka >= 81)
                        A
                    @elseif ($n->NilaiAngka >= 61)
                        B
                    @elseif ($n->NilaiAngka >= 41)
                        C
                    @else
                        D
                    @endif
                </td>
                <td>{{ $n->NilaiAngka * $n->SKS }}</td>
            </tr>
        @endforeach
    </table>
@endsection
