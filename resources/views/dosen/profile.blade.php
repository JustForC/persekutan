@extends('layout.dashboarddosen')

@section('title','Profile')

@section('dropdown')
<div class="btn-group">
    <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
      <a class="dropdown-item" href="/dosen/tambahmatkul">Tambah Matkul</a>
      <a class="dropdown-item" href="/dosen/kelasdiajar">Kelas</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/dosen/mahasiswadiwalikan">Daftar Anak Wali</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/dosen/profile">Profile</a>
      <a class="dropdown-item" href="/dosen/logout">Logout</a>
    </div>
    <a class='btn btn-dark' href="/dosen/home">Home</a>
</div>
@endsection

@section('content')
    <h5>Selamat Datang {{$dosen->nama}}</h5>
    <p>Data Diri<br>
       NIP : {{$dosen->nip}}<br>
       Nama : {{$dosen->nama}}<br>
       Email : {{$dosen->email}}</p>
    <a href="/dosen/editprofile">
        <button type="button" class="btn btn-dark">Edit Profile</button>
    </a>
@endsection
