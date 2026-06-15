@extends('template')
@section('title', 'Tambah ke Nilai Kuliah')
@section('Jumbotron', '5026231089 Yusuf Acala Sadurjaya Sri Krisna')
@section('konten')
<a href="/latihan_uas_cewek/nilaikuliah" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Nilai Kuliah
        </div>

        <div class="card-body">
            <form action="/latihan_uas_cewek/nilaikuliah/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="number" name="NilaiAngka" id="NilaiAngka" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="number" name="SKS" id="SKS" class="form-control" required>
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
