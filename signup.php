<?php
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link href="css.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>

    <!-- alert -->
    <?php if (isset($_POST['signup'])) { ?>
        <?php if (signup($_POST) > 0) { ?>

            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill mx-2" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
                <div>
                    Registrasi akun berhasil!
                </div>
            </div>

        <?php } else { ?>

            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill mx-2" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    Registrasi akun gagal!
                </div>
            </div>

        <?php } ?>
    <?php } ?>

    <!-- sign up -->
    <section class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="signup-form">
                    <form action="" method="post" class="mt-5 border p-4 bg-light shadow">
                        <h4 class="mb-5 text-secondary">Buat Akun Baru</h4>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label>Nama Depan<span class="text-danger">*</span></label>
                                <input autocomplete="off" type="text" name="nama_depan" id="nama_depan" class="form-control" placeholder="Masukkan Nama Depan" required>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label>Nama Belakang<span class="text-danger">*</span></label>
                                <input autocomplete="off" type="text" name="nama_belakang" id="nama_belakang" class="form-control" placeholder="Masukkan Nama Belakang" required>
                            </div>

                            <div class="mb-3 col-lg-12">
                                <label>Username<span class="text-danger">*</span></label>
                                <input autocomplete="off" type="username" name="username" id="username" class="form-control" placeholder="Masukkan Username" required>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label>Absen<span class="text-danger">*</span></label>
                                <input autocomplete="off" type="absen" name="absen" id="absen" class="form-control" placeholder="Masukkan Absen" required>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label>Role<span class="text-danger">*</span></label>
                                <select class="form-select" name="role" id="role" aria-label="Default select example" required>
                                    <option selected>Pilih sebagai </option>
                                    <option value="1">Guru</option>
                                    <option value="2">Siswa</option>
                                </select>
                            </div>

                            <div class="mb-3 col-lg-12">
                                <label>Kelas<span class="text-danger">*</span></label>
                                <input autocomplete="off" type="kelas" name="kelas" id="kelas" class="form-control" placeholder="Masukkan Kelas" required>
                            </div>

                            <div class="mb-3 col-lg-12">
                                <label>Password<span class="text-danger">*</span></label>
                                <input autocomplete="off" type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
                            </div>

                            <div class="mb-3 col-lg-12">
                                <label>Confirm Password<span class="text-danger">*</span></label>
                                <input autocomplete="off" type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm Password" required>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input autocomplete="off" class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Setuju dengan syarat dan ketentuan.
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" name="signup" class="btn btn-dark float-end">Daftar</button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">Jika anda punya akun, <a href="login.php">login sekarang!</a></p>
                </div>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js.js"></script>
</body>

</html>