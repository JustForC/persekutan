@extends('layout.dashboardmahasiswa')

@section('title','Daftar Kelas')

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
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          <tr>
            <th>Nama</th>
            <th>SKS</th>
            <th>Daftar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matkuls as $matkul)
            <tr>
                <th>{{$matkul->nama_matkul}}</th>
                <th>{{$matkul->sks}}</th>
                <td>
                <form mehtod="get" action="/mahasiswa/lakukantambahmatkul/{{$matkul->id}}">
                <button type="submit" class="btn btn-dark">Daftar</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
      </div>
@endsection
