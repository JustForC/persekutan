@extends('layout.default')

@section('title','Register')


@section('content')
    <div class="container">
        <h2>Silahkan Masukan Data Diri</h2>
        <form method='post' action='/dosen/lakukanregistrasi'>
        @csrf
        <div class="form-group">
            <label>Nomor Induk Pegawai</label>
            <input type="number" class="form-control" id="nip" name='nip'>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="email" name='email'>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" name='password'>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" id="nama" name='nama'>
        </div>
        <button type="submit" class="btn btn-dark">Registrasi</button>
        </form>
    </div>
@endsection