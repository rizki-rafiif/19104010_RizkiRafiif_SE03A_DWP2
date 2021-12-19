<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "testing_prak_php";

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error){
        die('Koneksi gagal : '.$conn->connection_error);
    }
?>