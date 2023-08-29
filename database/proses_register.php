<?php

include 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $cpassword = ($_POST['cpassword']);


if ($password == $cpassword) {
    $sql = "SELECT * FROM aslam WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO aslam (username, email, password)
                VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Selamat, registrasi berhasil!')<?script>";
            $username = "";
            $email = "";
            $_POST['password']="";
            $_POST['cpassword']="";
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
        echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
    }
} else {
    echo "<script>alert('Password Tidak Sesuai')</script>";
}

}

?>