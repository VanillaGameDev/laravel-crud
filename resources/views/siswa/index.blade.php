@extends('layout.master')

@section('content')
<body>
        @if(session('sukses'))

        <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
        </div>

        @endif
        <button type="button" class="btn btn-primary float-right btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <strong>Tambah Data</strong>
        </button>
            <h1>Data Siswa</h1>
            <!-- Button trigger modal -->

        <div class="row">
            <table class="table table-hover">
                <tr>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>

                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{ $siswa->nama_depan }}</td>
                    <td>{{ $siswa->nama_belakang }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>{{ $siswa->agama }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td><a href="/siswa/{{ $siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                    <td><a href="/siswa/{{ $siswa->id}}/delete" class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin Mau Hapus?')">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Silakan isi keterangannya</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
    <div class="modal-body">
    <form action="/siswa/create" method="POST">
        {{ csrf_field() }}
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    placeholder="Nama Depan">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    placeholder="Nama Belakang">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
    <option value="Laki-Laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
    </select>
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Agama</label>
    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    placeholder="Agama">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Alamat">
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection
