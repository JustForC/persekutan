@extends('layout.login')

@section('title','Login')


@section('action')
<form class="form-signin" method='post' action='/dosen/lakukanlogin'>
@endsection

@section('register')
<a href="/dosen/register">
<button type="button" class="btn btn-lg btn-dark btn-block">Registrasi</button>
</a>
@endsection