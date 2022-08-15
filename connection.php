<?php

$conn = mysqli_connect("localhost", "root", "", "tugas_akhir");

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function signup($account)
{
    global $conn;

    $firstname = $account['nama_depan'];
    $lastname = $account['nama_belakang'];
    $username = strtolower(stripslashes($account['username']));
    $numberid = $account['absen'];
    $role = $account['role'];
    $grade = $account['kelas'];
    $password = mysqli_real_escape_string($conn, $account["password"]);
    $confirmpassword = mysqli_real_escape_string($conn, $account['confirmpassword']);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        return false;
    }


    if ($password != $confirmpassword) {
        return false;
    }


    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('','$firstname', '$lastname', '$username', '$numberid', '$role', '$grade', '$password')");


    return mysqli_affected_rows($conn);
}

function signin()
{
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    // $result1 = mysqli_query($conn, "SELECT * FROM user WHERE password = '$password'");

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            // $_SESSION['nama_depan'] = $row['nama_depan'];
            // $_SESSION['nama_belakang'] = $row['nama_belakang'];
            return 3;
        }
        return 2;
    } else {
        return 1;
    }

    // if (mysqli_num_rows($result) == 1) {
    //     if (mysqli_num_rows($result1) == 1) {
    //         $succes = 3;
    //         $row = mysqli_fetch_assoc($result);
    //         $_SESSION['username'] = $row['username'];
    //         $_SESSION['role'] = $row['role'];
    //     }
    //     $succes = 2;
    // } else {
    //     $succes = 1;
    // }
}

function cookie()
{
    global $conn;

    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");

        $row = mysqli_fetch_assoc($result);

        if ($key == hash('sha256', $row['username'])) {
            return true;
        }
    }
}

function upload()
{
    $filename = $_FILES['nama_file']['name'];
    $filesize = $_FILES['nama_file']['size'];
    $error = $_FILES['nama_file']['error'];
    $tmpname = $_FILES['nama_file']['tmp_name'];

    if ($error == 4) {
        return false;
    }

    $fileformat = ['docx', 'pdf', 'ppt'];
    $fileexplode = explode('.', $filename);
    $fileexplode = strtolower(end($fileexplode));

    if (!in_array($fileexplode, $fileformat)) {
        return false;
    }

    if ($filesize > 1000000) {
        return false;
    }

    $newname = uniqid();
    $newname .= '.';
    $newname .= $fileexplode;

    move_uploaded_file($tmpname, '../file_tugas/' . $newname);

    return $newname;
}

function add_assignment($data)
{
    global $conn;

    $judul_tugas = htmlspecialchars($data["judul_tugas"]);
    $keterangan = htmlspecialchars($data['keterangan']);
    $deadline = htmlspecialchars($data["deadline"]);
    $time = htmlspecialchars($data["waktu"]);

    $query = "INSERT INTO tugas
                VALUES ('', '$judul_tugas', '$keterangan', '$deadline', '$time')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function add_file($data)
{
    global $conn;

    $file = upload();
    if (!$file) {
        return false;
    }

    $absen = htmlspecialchars($data["absen"]);

    $query = "INSERT INTO file VALUES('', '$file', '$absen', '')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function add_grade($data)
{
    global $conn;

    $grade = $data['nilai'];

    $query = "UPDATE file SET nilai = $grade";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
