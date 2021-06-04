<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../dist/css/admin.css">
  <link rel="stylesheet" type="text/css" href="../dist/icons/css/all.min.css">
  <title>Hello, world!</title>
</head>

<body>

  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-light p-4">
      <h5 class="text-primary h4">PT. INDONESIA</h5>
      <span class="text-muted">Sistem Informasi.</span>
    </div>
  </div>
  <nav class="navbar navbar-light bg-info">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h4 class="text-white">Admin <i class="fas fa-user-circle mr-5"></i></h4>
    </div>
  </nav>

  <div class="row no-gutters">
    <div class="col-md-2 bg-light mt-2 pr-3 pt-5">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="dashbord.php"><i class="fas fa-tachometer-alt"></i>
            Dashbord</a>
          <hr class="bg-info">
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="pegawai.html"><i class="fas fa-user mr-3"></i> Data Pegawai</a>
          <hr class="bg-info">
        </li>
        <li class="nav-item">
          <a class="nav-link " href="golongan.html"><i class="fas fa-layer-group mr-3"></i> Golongan</a>
          <hr class="bg-secondary">
        </li>
        </li>

      </ul>
    </div>
    <div class="col-md-10 p-5 pt-6">

      <h4> Dashboard / Profil</h4>
      </hr>
      <nav class="navbar navbar-light " style="background-color: #e3f2fd;"></nav>
      <br>

      
<div class="row mt-5">
  <div class="card shadow text-white text-center" style="width: 22rem;">
          <div class="card-header bg-info display-4">
            <i class="fa fa-user"></i>
          </div>
          <div class="card-body">
            <br>
            <h5 class="card-title text-primary font-family">Jumlah Pegawai</h5>
            <p class="card-body text-primary">560 orang</p>
          </div>
        </div>

        <div class="card shadow mx-2 text-white text-center" style="width: 22rem;">
          <div class="card-header bg-primary display-4">
            <i class="fa fa-users"></i>
          </div>
          <div class="card-body">
            <br>
            <p href="" class="card-body text-primary ">Golongan Pegawai PT. INDONESIA I - XIII</p>
          </div>
        </div>

        <div class="card shadow text-white text-center" style="width: 22rem;">
          <div class="card-header bg-success display-4">
            <i class="fa fa-book"></i>
          </div>
          <div class="card-body">
            <br>
            <h5 class="card-title text-primary">Data Absen</h5>
            <p class="card-body text-primary">Teradapat 4 Jenis Perizinan</p>
          </div>
        </div>            
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="../dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../dist/js/admin.js"></script>
</body>

</html>