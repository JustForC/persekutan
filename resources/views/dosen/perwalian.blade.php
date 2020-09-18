@extends('layout.dashboarddosen')

@section('script')
<script type="text/javascript">
   var analytics = <?php echo $gender; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var chart = new google.visualization.PieChart(document.getElementById('chart_gender'));
    chart.draw(data);
   }
</script>
<script type="text/javascript">
   var angkatan = <?php echo $angkatan; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(angkatan);
    var chart = new google.visualization.PieChart(document.getElementById('chart_angkatan'));
    chart.draw(data);
   }
</script>
@endsection

@section('title','Detail Perwalian')

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
    <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Berdasarkan Gender</h4>
        </div>
        <div class="panel-body" align = "center">
          <div id="chart_gender">
          </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Berdasarkan Angkatan</h4>
        </div>
        <div class="panel-body" align = "center">
          <div id="chart_angkatan">
          </div>
        </div>
    </div>
   @endsection

@section('table')
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
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