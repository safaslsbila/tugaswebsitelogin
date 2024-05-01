<?php
    include "koneksi.php";

    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username = '".$username."' AND password = '".$password."' ") or die (mysqli_error($koneksi));

    if(mysqli_num_rows($sql) == 0) {
        echo '<script language = "javascript">
        alert("username dan password salah!"); document.location="login.php";</script>';
    } else {
        echo '<script language = "javascript">
        alert("Anda berhasil login!"); document.location="halaman.php"; </script>';
    }

