@extends('layout.dashboarddosen')

@section('title','Tambah Matkul')

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
    <div class="container">
        <h2>Silahkan Masukan Data Mata Kuliah</h2>
        <form method='post' action='/dosen/lakukantambahmatkul'>
        @csrf
        <div class="form-group">
            <label>Nama Mata Kuliah</label>
            <input type="text" class="form-control" id="nama" name='nama'>
        </div>
        <div class="form-group">
            <label>SKS</label>
            <input type="number" class="form-control" id="sks" name='sks'>
        </div>
        <button type="submit" class="btn btn-dark">Tambah</button>
        </form>
    </div>
@endsection