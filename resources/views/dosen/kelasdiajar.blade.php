@extends('layout.dashboarddosen')

@section('title','Daftar Kelas')

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
        <table class="table table-striped table-sm">
          <thead>
          <tr>
            <th >Nama Matkul</th>
            <th >SKS</th>
            <th >Info Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matkuls as $matkul)
            <tr>
                <th>{{$matkul->nama_matkul}}</th>
                <th>{{$matkul->sks}}</th>
                <th>
                    <form mehtod="get" action="/dosen/daftarmahasiswa/{{$matkul->id}}">
                        <button type="submit" class="btn btn-dark">Detail</button>
                    </form>
                </th>
            @endforeach
        </tbody>
    </table>
      </div>
    @endsection