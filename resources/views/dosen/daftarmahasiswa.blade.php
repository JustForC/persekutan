@extends('layout.dashboarddosen')

@section('title','Detail Kelas')


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
<div class="table-responsive">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Angkatan</th>
            <th>Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $mahasiswa)
            <tr>
                <th>{{$mahasiswa->npm}}</th>
                <th>{{$mahasiswa->nama}}</th>
                <th>{{$mahasiswa->email}}</th>
                <th>{{$mahasiswa->angkatan}}</th>
                <th>{{$mahasiswa->kelamin}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
