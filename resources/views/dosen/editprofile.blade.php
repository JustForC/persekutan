@extends('layout.dashboarddosen')

@section('title','Edit Profile')

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
    <h4>Silahkan Isi Data Yang Baru</h4>
    <form method='post' action="/dosen/lakukaneditprofile">
        @csrf
        <div class="form-group">
            <input type="hidden" class="form-control" id="nip" name='nip' value='{{$dosen->nip}}'>
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
