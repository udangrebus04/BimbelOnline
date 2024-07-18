@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Kelas</div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success mt-2" role="alert">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                        <table class="table table-striped">
                            <h1 align="center">DAFTAR KELAS</h1>
                            <thead>
                                <tr>
                                    <a href="{{ route('bimbel.create') }}" class="btn btn-sm btn-success">Tambah Kelas</a>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelas</th>
                                    <th>Jumlah Siswa</th>
                                    <th>Jadwal Kelas</th>
                                    <th>Nama Guru</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kelas as $k)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->nama_kelas }}</td>
                                        <td>{{ $k->jumlah_siswa }}</td>
                                        <td>{{ $k->jadwal_kelas }}</td>
                                        <td>{{ $k->guru }}</td>
                                        <td>
                                            <a href="{{ route('bimbel.edit', $k->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('bimbel.destroy', $k->id) }}" method="post" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection