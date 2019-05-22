<?php
    session_start();
    ob_start();

    include "library/config.php";

    if(empty($_SESSION['username']) or empty($_SESSION['password'])) {
        echo "<p align='center'>Anda harus login terlebih dahulu!</p>";
        echo "<meta http-equiv='refresh' content='2;url=login.php'>";
    } else {
        define('INDEX', true);
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="plugin/DataTables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugin/bootstrap-datepicker/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="plugin/summernote/summernote-bs4.css">
    <title>Dashboard</title>
</head>
<body class="h-100">
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-info">
        <a href="#" class="navbar-brand">Manajemen Pegawai</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <nav class="collapse navbar-collapse" id="sidebar">
            <ul class="navbar-nav d-sm-none">
                <li class="nav-item">
                    <a href="?hal=dashboard" class="nav-link text-white">
                    <i class="oi oi-dashboard"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?hal=pegawai" class="nav-link text-white">
                    <i class="oi oi-person"></i>
                        Data Pegawai
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?hal=jabatan" class="nav-link text-white">
                    <i class="oi oi-sort-descending"></i>
                        Data Jabatan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link text-white">
                    <i class="oi oi-account-logout"></i>
                        Keluar
                    </a>
                </li>
            </ul>
        </nav>
    </nav>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark">
                        <a href="?hal=dashboard" class="nav-link text-white">
                        <i class="oi oi-dashboard"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="?hal=pegawai" class="nav-link text-white">
                        <i class="oi oi-person"></i>
                            Data Pegawai
                        </a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="?hal=jabatan" class="nav-link text-white">
                        <i class="oi oi-sort-descending"></i>
                            Data Jabatan
                        </a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="logout.php" class="nav-link text-white">
                        <i class="oi oi-account-logout"></i>
                            Keluar
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3">
                <section>
                    <?php include "konten.php"; ?>
                </section>
            </div>  
        </div>
    </div>
    <div class="bg-light fixed-bottom">
        <p class="m-2 text-center text-muted">
            Copyright &copy; Randy Maulana
        </p>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="plugin/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="plugin/DataTables/js/dataTables.bootstrap4.min.js"></script>
    
    <script src="plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="plugin/summernote/summernote-bs4.min.js"></script>
  
    <script>
        $(function(){
            $('.table').DataTable();
            $('#tanggal').datepicker();
            $('#keterangan').summernote();
        });
    </script>

</body>
</html>

<?php
    }
?>