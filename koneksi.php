<?php
    error_reporting(0);
    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $databasename = "kelompok";
    $connection = mysqli_connect($host, $username, $password) or die (mysqli_error());
    mysqli_select_db($connection, $databasename) or die (mysqli_error($connection));
