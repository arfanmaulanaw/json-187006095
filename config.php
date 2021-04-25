<?php
error_reporting(E_ALL ^ E_DEPRECATED);

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "matakuliah";
    
    $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
?>