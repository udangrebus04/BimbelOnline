@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Kelas</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('bimbel.update', $kelas->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nama_kelas">Nama Kelas</label>
                                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required>
                            </div>

                            <div class="form-group">
                                <label for="jumlah_siswa">Jumlah Siswa</label>
                                <input type="number" class="form-control" id="jumlah_siswa" name="jumlah_siswa" value="{{ $kelas->jumlah_siswa }}" required>
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary">Update Kelas</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection