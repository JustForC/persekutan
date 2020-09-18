@extends('layout.dashboarddosen')

@section('title','Home Dosen')


@section('content')
    <h1 class="h3">Selamat Datang {{\Session::get('emaildosen')}}</h1>
@endsection

@section('judultable')
Notification
@endsection

@section('table')
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          <tr>
            <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notifs as $notif)
            <tr>
                <th>{{$notif->pesan}}</th>
            </tr>
            @endforeach
        </tbody>
        </table>
      </div>
@endsection