<?php
    include "konekin.php";

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT into data (nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";
    $add = $conn->query($sql);

    if($add){
        $conn->close();
        header("location:index.php");
        exit();
    } else{
        echo "ERROR : ".$conn->error;
        $conn->close();
        exit();
    }

?>