@extends('layout.master')

@section('content')
<head>
    <title>Edit Database</title>
</head>
<body>
    <div class="container">
        @if(session('sukses'))

        <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
        </div>

        @endif
            <h1>Edit Data Siswa</h1>
            <!-- Button trigger modal -->

<div class="row">
    <form action="/siswa/{{ $siswa->id }}/update" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Nama Depan" value="{{ $siswa->nama_depan }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Nama Belakang" value="{{ $siswa->nama_belakang }}">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
            <option value="Laki-Laki" @if($siswa->jenis_kelamin == 'Laki-Laki') selected @endif >Laki-Laki</option>
            <option value="Perempuan"@if($siswa->jenis_kelamin == 'Perempuan') selected @endif >Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Agama</label>
            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Agama" value="{{ $siswa->agama }}">
        </div>

        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Alamat" value="{{ $siswa->alamat }}">
                </div>
                    <button type="submit" class="btn btn-warning"><strong>Update</strong></button>
        </div>
    </form>
</div>
</body>
@endsection

