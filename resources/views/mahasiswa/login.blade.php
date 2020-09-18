@extends('layout.login')

@section('title','Login')


@section('action')
<form class="form-signin" method='post' action='/mahasiswa/lakukanlogin'>
@endsection

@section('register')
<a href="/mahasiswa/register">
<button type="button" class="btn btn-lg btn-dark btn-block">Registrasi</button>
</a>
@endsection