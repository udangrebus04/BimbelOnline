@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Kelas</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('bimbel.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nama_kelas">Nama Kelas</label>
                                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
                            </div>

                            <div class="form-group">
                                <label for="jumlah_siswa">Jumlah Siswa</label>
                                <input type="number" class="form-control" id="jumlah_siswa" name="jumlah_siswa" required>
                            </div>

                            <div class="form-group">
                                <label for="jadwal_kelas">Jadwal Kelas</label>
                                <input type="text" class="form-control" id="jadwal_kelas" name="jadwal_kelas" required>
                            </div>

                            <div class="form-group">
                                <label for="guru">Nama Guru</label>
                                <input type="text" class="form-control" id="guru" name="guru" required>
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary">Tambah Kelas</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection