<?php
session_start();
include('../../connection.php');
$id = $_GET['id'];        // Collecting data from query string
if(!is_numeric($id)) echo "Data Error"; // Checking data it is a number or not

$query = "SELECT * FROM pegawai WHERE id =?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$pegawai = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Page</title>
    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../dist/icons/css/all.min.css">
    <script src="../../dist/js/bootstrap.min.js"></script>
    <style>
        input:invalid {
            border: 3px solid lightcoral;
        }
    </style>
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
                    <a class="nav-link " href="data.html" tabindex="-1" aria-disabled="true"><i class="fas fa-grip-horizontal mr-3"></i> Data Izin</a>
                </li>

            </ul>
        </div>
        <div class="col-md-10 p-5 pt-6">
            <h2 class="text-center mb-3">Edit data Pegawai</h2>
            <?php
            //  if ($_SESSION['role'] == 'admin') : 
            ?>
            <form action="action_edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id?>">
                <div class="row mb-2">
                    <div class="col-md-3">
                        <label for="nip" class="form-label fw-bold">NIP</label>
                    </div>
                    <div class="col">
                        <input type="text" name="nip" id="nip" class="form-control" value="<?php echo $pegawai['nip'] ?>" 
                        placeholder="nip (nomor induk pegawai)" pattern="[0-9]+" disabled>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3">
                        <label for="nama" class="form-label fw-bold">Nama</label>
                    </div>
                    <div class="col">
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $pegawai['nama'] ?>" 
                         placeholder="nama" disabled>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3">
                        <label for="tempat" class="form-label fw-bold">Tempat Lahir</label>
                    </div>
                    <div class="col">
                        <input type="text" name="tempat" id="tempat" class="form-control" placeholder="tempat lahir" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3">
                        <label for="tanggal" class="form-label fw-bold">Tanggal Lahir</label>
                    </div>
                    <div class="col">
                        <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="tanggal lahir" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3">
                        <label class="form-label fw-bold" for="jk">Jenis Kelamin</label>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk2" value="L" required>
                            <label class="form-check-label" for="jk1">
                                Laki - Laki
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk2" value="P">
                            <label class="form-check-label" for="jk2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3">
                        <label for="foto" class="form-label fw-bold mt-2">Foto</label>
                    </div>
                    <div class="col">
                        <input type="file" name="foto" id="foto" class="form-control" placeholder="foto">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <button type="submit" name="update" class="btn btn-primary shadow float-end">Edit Pegawai</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <?php
    // else : echo '<h2>You cannot access this page!!</h2>';
    //             echo '<a href="login.php">Back to home</a>';
    //             exit;
    //         endif;
    ?>
</body>

</html>