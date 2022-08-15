<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: ../index.php');
    exit;
}

require '../connection.php';

$assignments = query("SELECT * FROM tugas");
$ass_result = query("SELECT * FROM file");

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
</head>

<body>
    <!-- alert kirim tugas -->
    <?php if (isset($_POST['tugas'])) { ?>
        <?php if (!add_file($_POST)) { ?>

            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    Pengiriman tugas gagal! File harus terisi dan berformat <b>docx, pdf, png</b> dan di bawah <b>1 MB</b>!
                </div>
            </div>

        <?php } else { ?>
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Pengiriman Tugas Berhasil!
                </div>
            </div>
        <?php } ?>
    <?php } ?>


    <!-- alert nilai tugas -->
    <?php if (isset($_POST['beri_nilai'])) {
        if (add_grade($_POST)) { ?>

            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Tugas berhasil dinilai!
                </div>
            </div>

        <?php } else { ?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    Tugas gagal dinilai!
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

        <?php if ($role == 1) { ?>
            <section class="container">
                <div class="row" style="padding-top: 30px;">
                    <?php foreach ($assignments as $assignment) { ?>
                        <div class="offset-2 col-lg">
                            <div class="card">
                                <h3 class="mx-3 mb-4"><?= $assignment['judul_tugas'] ?></h3>
                                <p class="mx-3"><?= $assignment['keterangan'] ?></p>
                                <p class="mx-3"><?= $assignment['deadline'] ?></p>
                                <p class="mx-3"><?= $assignment['waktu'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        <?php } else if ($role == 2) { ?>
            <section class="container">
                <div class="row" style="padding-top: 30px;">
                    <?php foreach ($assignments as $assignment) { ?>
                        <div class="offset-2 col-lg">
                            <div class="card">
                                <h3 class="mx-3 mb-4"><?= $assignment['judul_tugas'] ?></h3>
                                <p class="mx-3"><?= $assignment['keterangan'] ?></p>
                                <p class="mx-3"><?= $assignment['deadline'] ?></p>
                                <p class="mx-3"><?= $assignment['waktu'] ?></p>
                                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#submit_tugas">Submit Tugas</button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        <?php } ?>

        <section class="container">
            <div class="row offset-2 mt-3">
                <?php foreach ($ass_result as $ass) { ?>
                    <div class="col-lg-4">
                        <div class="h-100 p-5 text-white bg-dark rounded-3">
                            <h5><?= $ass['nama_file']; ?></h5>
                            <h6 class="fw-normal">Absen : <?= $ass['absen']; ?></h6>
                            <h6 class="fw-normal">Nilai : <?= $ass['nilai']; ?>/100</h6>
                            <?php if ($role == 1) { ?>
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Beri Nilai</label>
                                        <input type="text" class="form-control" name="nilai" aria-describedby="emailHelp" placeholder="0 - 100">
                                    </div>
                                    <button type="submit" name="beri_nilai" class="btn btn-outline-light">Beri Nilai</button>
                                </form>
                            <?php } ?>
                            <a href="../file_tugas/<?= $ass['nama_file'] ?>">
                                <button type="button" name="download" class="btn btn-outline-light">Download Tugas</button>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>

        <script src="../js/bootstrap.bundle.js"></script>
        <script src="../js.js"></script>

        <!-- Modal -->
        <div class="modal fade" id="submit_tugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Beri Tugas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class=" row">
                                <div class="">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <h3><?= $assignment['judul_tugas'] ?></h3>
                                    </label>
                                </div>

                                <div class="mb-4">
                                    <label for="exampleFormControlTextarea1" class="form-label">
                                        <h5><?= $assignment['keterangan'] ?></h5>
                                    </label>
                                </div>

                                <div class="mb-4 col-lg-6">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <h5>Tanggal pengumpulan : <?= $assignment['deadline'] ?></h5>
                                    </label>
                                </div>

                                <div class="mb-4 col-lg-6">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <h5>Waktu : <?= $assignment['waktu'] ?> WIB</h5>
                                    </label>
                                </div>

                                <div class="mb-4 col-lg-8">
                                    <label for="formFile" class="form-label">Default file input example</label>
                                    <input class="form-control" type="file" name="nama_file" id="nama_file">
                                </div>

                                <div class="col-lg-3">
                                    <label for="" class="form-label">Absen</label>
                                    <input class="form-control" type="text" name="absen" placeholder="Masukkan absen" aria-label="default input example">
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" name="tugas" class="btn btn-warning">Kirim Tugas</button>
                        </div>
                </form>
            </div>
        </div>
</body>

</html>