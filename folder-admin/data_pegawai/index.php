    <?php
    include_once('../../connection.php');
    session_start();

    $sql = "SELECT * FROM pegawai ORDER BY nama ASC";

    if ($conn->query($sql)) {
        $data_pegawai = $conn->query($sql);
    } else {
        echo ("Error description: " . $conn->error);
        die();
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data</title>
        <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../dist/icons/css/all.min.css">
    </head>
    
    <body>
        <?php
        // if ($_SESSION['role'] == 'manager') :            
            ?>
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
                
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                    <div class="container-md">
                        <a class="navbar-brand" href="#">DATA PEGAWAI</a>
                        <br>
                        <a href="create.php" class="btn btn-success"><i class="fas fa-plus mr-2"></i> Add</a>
                    </div>
                </nav>
                
                <br>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>                        
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">TTL</th>
                            <th scope="col">JK</th>
                            <th scope="col">button</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($data_pegawai) > 0) {
                            $i = 1;                                
                            while ($pegawai = mysqli_fetch_array($data_pegawai)) {                                
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $pegawai['nip'] ?></td>
                                    <td><?php echo $pegawai['nama'] ?></td>
                                    <td><?php echo $pegawai['ttl'] ?></td>
                                    <td><?php echo $pegawai['jk'] ?></td>
                                    <td><?php echo $pegawai['foto'] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $pegawai['id'] ?>" class="btn btn-info">Edit</a>
                                        <a href="action_delete.php?id=<?php echo $pegawai['id']?>" class="btn btn-danger" 
                                        onclick="return confirm('beneran??')"
                                        >Delete</a>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <br>
            </div>
        </div>
        <?php
        // else :
            //     echo '<h2>You cannot access this page!!</h2>';
            //     echo '<a href="../home.php">Back to home</a>';
        //     exit;
        // endif
        ?>
    <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
    </html>