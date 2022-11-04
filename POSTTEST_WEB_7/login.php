<!DOCTYPE html>
<html lang = "en">

    <head>
        <title> LOGIN </title>
        <link rel = "stylesheet" href = "stylelogin.css">
    </head>

    <body>
        <div class = "container">
        <h3> LOGIN AKUN </h3>

        <form action = "" method = "post">

            <label for = ""> Username </label><br>
            <input type = "text" name = "user"><br><br>

            <label for = ""> Password </label><br>
            <input type = "password" name = "password"> <br> <br>
            
            <input type = "submit" name = "login" value = "login">
        </form>

        <p> BELUM PUNYA AKUN?
            <a href = "register.php"> <br> registrasi </a>
        </p>
    </body>
</html>

<?php
    session_start();
    require 'akunconfig.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $query = "SELECT * FROM akun
                WHERE username = '$user'
                OR email = '$user'";
        $result = $db -> query($query);
        $row = mysqli_fetch_array($result);
        $username = $row['username'];

        if(password_verify($password, $row['psw'])){
            $_SESSION['login'] = true;

            echo "<script>
                    alert('Selamat Datang $username');
                    document.location.href = 'home.php';
                    </script>";
        }else{
            echo "<script>
                    alert('PASSWORD YANG ANDA MASUKKAN SALAH');
                    </script>";
        }
    }