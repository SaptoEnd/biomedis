<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body {
        position: relative; 
    }
    #section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
    #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
    #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
    #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
    #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
    
   footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Rumah Sakit</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="?page=dashboard">Dashboard</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Master<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="?page=d_spesialis">Spesialis Dokter</a></li>
              <li><a href="?page=dokter">Dokter</a></li>
              <li><a href="?page=pegawai">Pegawai</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pasien<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="?page=r_pasien">Registrasi Pasen Baru</a></li>
              <li><a href="?page=data_pasien">Data Pasien</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kegiatan<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="?page=kunjungan_hari_ini">Kunjungan Hari Ini</a></li>
              <li><a href="?page=data_pengunjung">Data Pengunjung</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="proses.php" name="logout" onclick="return confirm('Apakah anda yakin keluar ?')"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav> 
   



<div class="navbar navbar-inverse navbar-fixed-bottom">
  <footer class="container-fluid text-center">
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Rumah Sakit<i class="fa fa-heart"
    aria-hidden="true"></i>
</footer>
</div>
</body>
</html>
