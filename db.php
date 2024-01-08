<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "wedding";

    $koneksi = mysqli_connect($server, $user, $password, $database);
if (!$koneksi)
{
    echo "gagal koneksi database";
}
?>