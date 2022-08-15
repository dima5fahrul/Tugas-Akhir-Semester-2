<?php

session_start();
require 'connection.php';

// $conn = mysqli_connect("localhost", "root", "", "tugas_akhir");
// $username = $_POST['username'];
// $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
// $row = mysqli_fetch_assoc($result);

if (cookie()) {
    $_SESSION['login'] = true;
}

if (isset($_SESSION['login'])) {

    header('Location: dashboard/home.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="css.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <!-- alert -->
    <?php if (isset($_POST['login'])) { ?>
        <?php if (signin() == 3) {

            $_SESSION['login'] = true;

            if (isset($_POST['remember'])) {
                setcookie('id', $row['password']);
            }

            header('Location: dashboard/home.php');
            exit;
        } else if (signin() == 2) { ?>

            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    Password yang anda masukkan salah! Silahkan cek kembali!
                </div>
            </div>

        <?php } else if (signin() == 1) { ?>

            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    Username yang anda masukkan salah! Silahkan cek kembali!
                </div>
            </div>

        <?php } ?>
    <?php } ?>

    <!-- login -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="signup-form">
                    <form action="" method="post" class="mt-5 border p-4 bg-light shadow">
                        <h4 class="mb-5 text-secondary">Masuk ke Akun</h4>
                        <div class="row">
                            <div class="mb-3 col-lg-12">
                                <label>Username<span class="text-danger">*</span></label>
                                <input type="username" name="username" class="form-control" placeholder="Masukkan Username">
                            </div>

                            <div class="mb-3 col-lg-12">
                                <label>Password<span class="text-danger">*</span></label>
                                <input autocomplete="off" type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
                            </div>

                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" name="remember" id="remember"> Ingat saya
                                </label>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" name="login" class="btn btn-dark float-end">Login</button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">Jika anda belum punya akun, <a href="signup.php">daftar
                            sekarang!</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js.js"></script>
</body>

</html>