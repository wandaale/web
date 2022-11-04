<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "makeup";

    $conn = new mysqli($server, $username, $password, $db_name);

    if (!$conn){
        die("GAGAL TERHUBUNG KE DATABASE : " . mysqli_connect_error());
    }
?>