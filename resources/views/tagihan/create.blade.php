@extends('template')
@section('title', 'Tambah Data Tagihan Meteran Air')
@section('Jumbotron', 'Kode Soal tagihan_air')
@section('konten')

    <div class="card">
        <div class="card-header">
            Form Tambah Data Tagihan Meteran Air
        </div>

        @if ($errors->any())
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="card-body">
            <form action="{{ route('tagihan.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label for="NoMeteran" class="col-sm-2 col-form-label">No Meteran</label>
                    <div class="col-sm-10">
                        <input type="text" name="NoMeteran" id="NoMeteran" maxlength="6" value="{{ old('NoMeteran') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="MeterAwal" class="col-sm-2 col-form-label">Meter Awal</label>
                    <div class="col-sm-10">
                        <input type="text" name="MeterAwal" id="MeterAwal" value="{{ old('MeterAwal') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="MeterAkhir" class="col-sm-2 col-form-label">Meter Akhir</label>
                    <div class="col-sm-10">
                        <input type="text" name="MeterAkhir" id="MeterAkhir" value="{{ old('MeterAkhir') }}">
                    </div>
                </div>

                <button type="submit">Simpan</button>
                <a href="{{ route('tagihan.index') }}">Kembali</a>
            </form>

            <script>
                function validasiForm() {
                    let NoMeteran = document.getElementById('NoMeteran').value.trim();
                    let MeterAwal = document.getElementById('MeterAwal').value.trim();
                    let MeterAkhir = document.getElementById('MeterAkhir').value.trim();

                    if (NoMeteran === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "No Meteran wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    if (NoMeteran.length > 6 || NoMeteran.length < 6) {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "No Meteran harus 6 karakter",
                            icon: "error"
                        });
                        return false;
                    }

                    if (MeterAwal === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Meter Awal wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    if (MeterAkhir === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Meter Akhir wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    if (MeterAkhir - MeterAwal < 20) {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Selisih Meter Akhir dan Meter Awal harus minimal 20",
                            icon: "error"
                        });
                        return false;
                    }
                }
            </script>
        @endsection
