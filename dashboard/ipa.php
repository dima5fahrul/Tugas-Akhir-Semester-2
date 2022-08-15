<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: ../index.php');
    exit;
}

require '../connection.php';

$assignments = query("SELECT * FROM tugas");

$role = $_SESSION['role'];
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <!-- alert -->
    <?php if (isset($_POST['tugas'])) { ?>
        <?php if (add_assignment($_POST)) { ?>

            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill mx-2" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
                <div>
                    Pembuatan tugas berhasil!
                </div>
            </div>

        <?php } else { ?>

            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill mx-2" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    Pembuatan tugas gagal!
                </div>
            </div>

        <?php } ?>
    <?php } ?>


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
                <a href="jadwal.php" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Jadwal
                </a>
            </li>
            <li>
                <a href="tugas.php" class="nav-link active">
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


    <?php if ($role == 2) { ?>
        <section class="container">
            <div class="row offset-2" style="padding-top: 30px;">
                <?php foreach ($assignments as $assignment) { ?>
                    <div class="col-lg-4">
                        <div class="h-100 p-5 text-white bg-dark rounded-3">
                            <h3><?= $assignment['judul_tugas']; ?></h3>
                            <h6 class="fw-normal">Tanggal terakhir pengumpulan : <?= $assignment['deadline']; ?></h6>
                            <h6 class="fw-normal">Waktu : <?= $assignment['waktu']; ?></h6>
                            <a href="ipa_pengumpulan.php?id= <?= $assignment['id'] ?>">
                                <button type="button" class="btn btn-outline-light">Lihat Pengumpulan</button>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    <?php } else if ($role == 1) { ?>
        <section class="container">
            <div class="row" style="padding-top: 50px;">
                <div class="offset-2 col-lg-3">
                    <div class="h-100 p-2 bg-white text-center border rounded-3">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#beri_tugas">
                            Buat Tugas
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row offset-2 mt-3">
                <?php foreach ($assignments as $assignment) { ?>
                    <div class="col-lg-4">
                        <div class="h-100 p-5 text-white bg-dark rounded-3">
                            <h3><?= $assignment['judul_tugas']; ?></h3>
                            <h6 class="fw-normal">Tanggal terakhir pengumpulan : <?= $assignment['deadline']; ?></h6>
                            <h6 class="fw-normal">Waktu : <?= $assignment['waktu']; ?></h6>
                            <a href="ipa_pengumpulan.php">
                                <button type="button" class="btn btn-outline-light">Lihat Pengumpulan</button>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    <?php } ?>


    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js.js"></script>


    <!-- Modal -->
    <div class="modal fade" id="beri_tugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Beri Tugas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <h3>Judul Tugas</h3>
                                    </label>
                                    <input type="text" name="judul_tugas" class="form-control">
                                </div>

                                <div class="mb-4">
                                    <label for="exampleFormControlTextarea1" class="form-label">
                                        <h5>Keterangan</h5>
                                    </label>
                                    <textarea type="text" name="keterangan" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="mb-4 col-lg-8">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <h5>Tanggal Pengumpulan</h5>
                                    </label>
                                    <input type="date" name="deadline" class="form-control">
                                </div>

                                <div class="mb-4 col-lg-4">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <h5>Waktu Pengumpulan</h5>
                                    </label>
                                    <input type="time" name="waktu" class="form-control">
                                </div>
                        </form>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="tugas" class="btn btn-warning">Buat Tugas</button>
                </div>
            </form>
        </div>
    </div>
</body>


</html>