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
                <a href="home.php" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <a href="jadwal.php" class="nav-link active">
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
                <li><a class="dropdown-item" href="../login.php">Sign out</a></li>
            </ul>
        </div>
    </nav>

    <section class="container-fluid" style="padding-top: 50px;">
        <div class="row">
            <div class="offset-3 col-lg-3">
                <div class="h-90 p-3 text-white bg-dark rounded-3">
                    <h3>Senin</h3>
                    <h5 class="fw-normal">Ilmu Pengetahuan Alam</h5>
                    <h6 class="fw-normal">08.00 - 10.00 WIB</h6>
                    <a href="ipa.php">
                        <button type="button" class="btn btn-outline-light btn-sm">Lihat Tugas >></button>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="h-90 p-3 text-white bg-dark rounded-3">
                    <h3>Selasa</h3>
                    <h5 class="fw-normal">Matematika</h5>
                    <h6 class="fw-normal">08.00 - 10.00 WIB</h6>
                    <a href="mtk.php">
                        <button type="button" class="btn btn-outline-light btn-sm">Lihat Tugas >></button>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="h-90 p-3 text-white bg-dark rounded-3">
                    <h3>Rabu</h3>
                    <h5 class="fw-normal">Bahasa Indonesia</h5>
                    <h6 class="fw-normal">08.00 - 10.00 WIB</h6>
                    <a href="bi.php">
                        <button type="button" class="btn btn-outline-light btn-sm">Lihat Tugas >></button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="offset-3 col-lg-3">
                <div class="h-90 p-3 text-white bg-dark rounded-3">
                    <h3>Kamis</h3>
                    <h5 class="fw-normal">Ilmu Pengetahuan Sosial</h5>
                    <h6 class="fw-normal">08.00 - 10.00 WIB</h6>
                    <a href="ips.php">
                        <button type="button" class="btn btn-outline-light btn-sm">Lihat Tugas >></button>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="h-90 p-3 text-white bg-dark rounded-3">
                    <h3>Jum'at</h3>
                    <h5 class="fw-normal">Bahasa Inggris</h5>
                    <h6 class="fw-normal">08.00 - 10.00 WIB</h6>
                    <a href="bing.php">
                        <button type="button" class="btn btn-outline-light btn-sm">Lihat Tugas >></button>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="h-90 p-3 text-white bg-primary rounded-3">
                    <h3>Sabtu</h3>
                    <h5 class="fw-normal">Olahraga</h5>
                    <h6 class="fw-normal">07.00 - 09.00 WIB</h6>
                    <a href="olrg.php">
                        <button type="button" class="btn btn-outline-light btn-sm">Lihat Tugas >></button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="offset-3 col-lg-3">
                <div class="h-100 p-5 text-white bg-danger rounded-3">
                    <h3>Minggu</h3>
                    <h5 class="fw-normal">Libur</h5>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js.js"></script>
</body>

</html>