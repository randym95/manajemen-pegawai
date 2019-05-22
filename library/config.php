<?php

    $con = mysqli_connect("localhost", "root", "", "pegawai");

    if(mysqli_connect_errno()) {
        echo ("Koneksi Gagal : " . mysqli_connect_error());
    }
?>