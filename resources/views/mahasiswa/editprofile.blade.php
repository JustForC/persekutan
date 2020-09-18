@extends('layout.dashboardmahasiswa')

@section('title','Edit Profile')

@section('dropdown')
<div class="btn-group">
    <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
      <a class="dropdown-item" href="/mahasiswa/daftarmatkul">Jadwal Kelas</a>
      <a class="dropdown-item" href="/mahasiswa/daftarkelas">Daftar Matkul</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/mahasiswa/profile">Profile</a>
      <a class="dropdown-item" href="/mahasiswa/logout">Logout</a>
    </div>
    <a class='btn btn-dark' href="/mahasiswa/home">Home</a>
</div>
@endsection

@section('content')
       <h4>Silahkan Isi Data Yang Baru</h4>
    <form method='post' action="/mahasiswa/lakukaneditprofile">
        @csrf
        <div class="form-group">
            <input type="hidden" class="form-control" id="npm" name='npm' value='{{$mahasiswa->npm}}'>
        </div>
        <div class="form-group">
            <h5><label>Email</label></h5>
            <input type="email" class="form-control" id="email" name='email'>
        </div>
        <div class="form-group">
            <h5><label>Password</label></h5>
            <input type="password" class="form-control" id="password" name='password'>
        </div>
        <div class="form-group">
            <h5><label>Nama</label></h5>
            <input type="text" class="form-control" id="nama" name='nama'>
        </div>
        <button type="submit" class="btn btn-dark">Selesai</button>
    </form>
@endsection
