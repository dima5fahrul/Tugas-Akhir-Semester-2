<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: ../index.php');
    exit;
}

require '../connection.php';

$role = $_SESSION['role'];
// $firstname = $_SESSION['nama_depan'];
// $lastname = $_SESSION['nama_belakang'];
// var_dump($role);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="../css.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <nav class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 700px; position: fixed;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <a href="jadwal.php" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Jadwal
                </a>
            </li>
            <li>
                <a href="tugas.php" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#table"></use>
                    </svg>
                    Tugas
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
            </ul>
        </div>
    </nav>

    <section class="container-fluid">
        <div class="row" style="padding-top: 40px;">
            <div class="offset-3 col-lg-5">
                <div class=" h-100 p-5 text-white bg-dark rounded-3">
                    <h2>Ilmu Pengetahuan Alam</h2>
                    <h5>Senin, 4 Oktober 2021</h5>
                    <p>08.00 - 10.00 WIB</p>
                    <a href="jadwal.php">
                        <button class="btn btn-outline-light" type="button">Lihat selengkapnya »</button>
                    </a>
                </div>
            </div>

            <div class="offset-1 col-lg">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                </svg>

                <h2>Profile</h2>
                <h4 class="fw-normal">Selamat Datang, profile</h4>
                <p><a class="btn btn-secondary" href="profile.php">Lihat selengkapnya »</a></p>
            </div>

            <hr class="mt-5">

            <div class="row mt-4">
                <div class="offset-3 col-lg">
                    <div class="h-100 p-5 bg-secondary border rounded-3">
                        <h2>Belum ada tugas hari ini</h2>
                        <p>Or, keep it light and add a border for some added definition to the boundaries of your
                            content.
                            Be sure to look under the hood at the source HTML here as we've adjusted the alignment and
                            sizing of both column's content for equal-height.</p>
                        <button class="btn btn-outline-dark" type="button">Example button</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js.js"></script>
</body>

</html>