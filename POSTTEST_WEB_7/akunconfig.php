<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "akun";

    $db = new mysqli($server, $username, $password, $db_name);

    if(!$db){
        die("gagal terhubung");
    }
?>