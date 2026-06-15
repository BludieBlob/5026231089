@extends('template')
@section('title', 'Data Tagihan Meteran Air')
@section('Jumbotron', 'Kode Soal tagihan_air')
@section('konten')

    <h1>Data Tagihan Meteran Air</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('tagihan.create') }}" class="btn btn-primary">Input Tagihan Baru</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Meteran</th>
            <th>Penggunaan (m³)</th>
            <th>Total Tagihan</th>
        </tr>

        @forelse($tagihan as $t)
            <tr>
                <td>{{ $t->ID }}</td>
                <td>{{ $t->NoMeteran }}</td>
                <td>{{ number_format($t->MeterAkhir - $t->MeterAwal) }}</td>
                <td>RP {{ number_format(($t->MeterAkhir - $t->MeterAwal) * 5000) }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data tagihan.</td>
            </tr>
        @endforelse
    </table>
@endsection
