@extends('layout.dashboardmahasiswa')

@section('title','Home')



@section('content')
    <h1 class = 'h3'>Selamat Datang {{\Session::get('emailmahasiswa')}}</h1>
@endsection
