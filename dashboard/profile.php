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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
                </svg>
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
                <li>
                    <h5 class="fw-normal">Kembali</h5>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <section class="container mt-5">
        <div class="row">
            <div class="col-12 position-relative">
                <svg class="bd-placeholder-img position-absolute top-0 start-50 translate-middle-x rounded-circle" width="240" height="240" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text>
                </svg>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 280px;">
            <div class="mb-3 col-6">
                <label class="form-label" for="customFile">
                    <h4>Ganti Foto</h4>
                </label>
                <input type="file" class="form-control" id="customFile">
            </div>
        </div>

        <form class="row g-3 needs-validation mb-5" novalidate>
            <div class="col-lg-4">
                <label for="validationCustom01" class="form-label">Nama Depan</label>
                <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-lg-4">
                <label for="validationCustom02" class="form-label">Nama Belakang</label>
                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-lg-4">
                <label for="validationCustomUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <label for="validationCustom02" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-lg-3">
                <label for="validationCustom02" class="form-label">Absen</label>
                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="dropdown col-lg-3">
                <label for="validationCustom02" class="form-label">Role</label>
                <button class="btn btn-secondary bg-dark form-control dropdown-toggle" type="button" id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false">
                    Sebagai
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
                    <li class="dropdown-item" name="siswa">Siswa</li>
                    <li class="dropdown-item" name="dosen">Dosen</li>
                </ul>
            </div>
            <div class="col-lg-3">
                <label for="validationCustom02" class="form-label">Password</label>
                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-lg-3">
                <label for="validationCustom02" class="form-label">Verifikasi Password</label>
                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn bg-dark btn-primary" type="submit">Ubah</button>
            </div>
        </form>
    </section>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js.js"></script>
</body>

</html>