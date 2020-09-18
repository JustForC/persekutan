@extends('layout.default')

@section('title','Register')

@section('content')
    <div class="container">
        <h2>Silahkan Masukan Data Diri</h2>
        <form method='post' action='/mahasiswa/lakukanregistrasi'>
        @csrf
        <div class="form-group">
            <label>Nomor Pokok Mahasiswa</label>
            <input type="number" class="form-control" id="npm" name='npm'>
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
        <div class="form-group">
            <label>Nama Dosen</label>
            <select select type="text" class="form-control" name="email_dosen">
            @foreach($dosens as $d)
            <option value='{{$d->email}}'>
            {{$d->nama}}
            </option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Angkatan</label>
            <input type="number" class="form-control" id="angkatan" name='angkatan'>
        </div>
        <div class="form-group">
            <label>Kelamin</label>
            <select class="form-control" name='kelamin' id="kelamin" input type='text'>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-dark">Registrasi</button>
        </form>
    </div>
@endsection