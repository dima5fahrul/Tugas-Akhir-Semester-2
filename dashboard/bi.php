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
                <a href="#" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Jadwal
                </a>
            </li>
            <li>
                <a href="#" class="nav-link active">
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
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </nav>

    <section class="container">
        <div class="row justify-content-center" style="padding-top: 50px;">
            <div class="offset-3 col-lg-6">
                <div class="h-100 p-5 bg-white text-center border rounded-3">
                    <h4 class="fw-normal">Belum ada tugas</h4>
                </div>
            </div>
            <div class="col-lg-6 offset-3">
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
            </div>
        </div>
    </section>

    <script src="/../js/bootstrap.bundle.js"></script>
    <script src="../js.js"></script>
</body>

</html>