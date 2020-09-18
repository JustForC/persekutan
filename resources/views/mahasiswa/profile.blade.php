@extends('layout.dashboardmahasiswa')

@section('title','Profile')

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
    <h5>Selamat Datang {{$mahasiswa->nama}}</h5>
    <p>Data Diri<br>
       NIP : {{$mahasiswa->nip}}<br>
       Nama : {{$mahasiswa->nama}}<br>
       Email : {{$mahasiswa->email}}<br>
       Angkatan : {{$mahasiswa->angkatan}}<br>
       Jenis Kelamin : {{$mahasiswa->kelamin}}</p>
@endsection
