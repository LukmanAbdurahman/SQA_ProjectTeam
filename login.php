<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "password123") {
    echo "Login Berhasil!";
} else {
    echo "Login Gagal!";
}
?>
