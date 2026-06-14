@extends('template')
@section('title', 'Mengedit Data Siswa')
@section('konten')
    <a href="{{ route('siswa.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Edit Data Siswa
        </div>

        @if ($errors->any())
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="card-body">
            <form action="{{ route('siswa.update', $siswa->NRP) }}" method="POST" onsubmit="return validasiForm()">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                            <input type="text" name="NRP" id="NRP" maxlength="10"
                                value="{{ old('NRP', $siswa->NRP) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                            <input type="text" name="Nama" id="Nama" maxlength="20"
                                value="{{ old('Nama', $siswa->Nama) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                            <input type="text" name="Kelas" id="Kelas" maxlength="5"
                                value="{{ old('Kelas', $siswa->Kelas) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="TanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                            <input type="date" name="TanggalLahir" id="TanggalLahir"
                                value="{{ old('TanggalLahir', $siswa->TanggalLahir) }}">
                    </div>
                </div>

                <button type="submit">Update</button>
                <a href="{{ route('siswa.index') }}">Kembali</a>
            </form>

            <script>
                function validasiForm() {
                    let nrp = document.getElementById('NRP').value.trim();
                    let nama = document.getElementById('Nama').value.trim();
                    let kelas = document.getElementById('Kelas').value.trim();
                    let tanggal = document.getElementById('TanggalLahir').value;

                    if (nrp === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "NRP wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    if (nrp.length > 10) {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "NRP maksimal 10 karakter",
                            icon: "error"
                        });
                        return false;
                    }

                    if (nama === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Nama wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    if (nama.length > 20) {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Nama maksimal 20 karakter",
                            icon: "error"
                        });
                        return false;
                    }

                    if (kelas === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Kelas wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    if (kelas.length > 5) {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Kelas maksimal 5 karakter",
                            icon: "error"
                        });
                        return false;
                    }

                    if (tanggal === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Tanggal lahir wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    return true;
                }
            </script>
        @endsection
