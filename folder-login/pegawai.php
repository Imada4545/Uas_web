<?php
include_once('../connection.php');
?>


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

  <nav class="navbar navbar-expand-lg navbar-info bg-info fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#"> <b> PT. INDONESIA |</b></a>
      <h4 class="text-white" href="#">Admin <i class="fas fa-user-circle mr-5"></i></h4>
    </div>
    </div>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-light mt-2 pr-3 pt-4">
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
        <li class="nav-item">
          <a class="nav-link " href="kenaikangaji.html"><i class="fas fa-money-check-alt mr-3"></i> Kenaikan Gaji</a>
          <hr class="bg-secondary">
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="mutasi.html"><i class="fas fa-people-carry mr-3"></i> Mutasi</a>
          <hr class="bg-secondary">
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="mutasi.html"><i class="fas fa-caret-right"></i> Prestasi Kerja Pegawai</a>
          <hr class="bg-secondary">
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="permohonan.html"><i class="fas fa-paper-plane mr-3"></i> Permohonan Izin</a>
          <hr class="bg-secondary">
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="gaji.html"><i class="fas fa-search-dollar mr-3"></i> Gaji</a>
          <hr class="bg-secondary">
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="data.html" tabindex="-1" aria-disabled="true"><i
              class="fas fa-grip-horizontal mr-3"></i> Data Izin</a>
        </li>

      </ul>
    </div>
    <div class="col-md-10 p-5 pt-6">

      <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-md">
          <a class="navbar-brand" href="#">DATA PEGAWAI</a>
          <br>
          <a><i class="fas fa-plus mr-2"></i> Add</a>
        </div>
      </nav>

      <br>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Foto</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">TTL</th>
            <th scope="col">JK</th>
            <th colspan="3" scope="col">More</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <img src="pict1.jpg">
            </td>
            <td>12096</td>
            <td>Mark Bonsen</td>
            <td>Bekasi, 12 Maret 2002</td>
            <td>Laki - Laki</td>
            <td><a href="" class="btn btn-primary">Detail</a></td>
            <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-tonggle="tooltip" title="Edit"></i></td>
            <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-tonggle="tooltip" title="Delete"></i>
          </tr>

          <tr>
            <th scope="row">2</th>
            <td>
              <img src="pict2.jpg">
            </td>
            <td>12096</td>
            <td>Maria Siska</td>
            <td>Jakarta, 16 April 2001</td>
            <td>Perempuan</td>
            <td><a href="" class="btn btn-primary">Detail</a></td>
            <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-tonggle="tooltip" title="Edit"></i></td>
            <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-tonggle="tooltip" title="Delete"></i>
          </tr>

          <tr>
            <th scope="row">1</th>
            <td>
              <img src="pict3.jpg">
            </td>
            <td>12472</td>
            <td>Jaka</td>
            <td>Surabaya, 6 Juni 1999</td>
            <td>Perempuan</td>
            <td><a href="" class="btn btn-primary">Detail</a></td>
            <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-tonggle="tooltip" title="Edit"></i></td>
            <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-tonggle="tooltip" title="Delete"></i>
            </tr>
          <th scope="row">1</th>
          <td>
            <img src="pict2.jpg">
          </td>
          <td>12472</td>
          <td>Rana</td>
          <td>Surabaya, 9 Juni 1989</td>
          <td>Perempuan</td>
          <td><a href="" class="btn btn-primary">Detail</a></td>
          <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-tonggle="tooltip" title="Edit"></i></td>
          <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-tonggle="tooltip" title="Delete"></i>
            </tr>

        </tbody>
      </table>
      <br>


    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="../dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../dist/js/admin.js"></script>
</body>

</html>