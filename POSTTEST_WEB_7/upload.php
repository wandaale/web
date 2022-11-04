<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upload Gambar </title>
</head>
<body>
    <div class="down">
        <div class="tambah">
            <h3> BUKTI PEMBAYARAN </h3>
        </div>
            <form action = "" method = "POST" enctype = "multipart/form-data">
                <p>Tanggal Upload : <?=date("d-m-Y")?></p>
                <label for = ""> Upload Bukti Pembayaran : </label>
                <input type = "file" name = "foto"> <br><br>
                <div class = "submit">
                    <input type = "hidden" name = "upload" value=<?=date("d-m-Y")?>>
                    <input type = "submit" name = "submit">
                </div>
            </form>
    </div>
</body>
</html>

<?php
    require 'makeup2.php';

    if(isset($_POST['submit'])){
        $upload= $_POST['upload'];

        $gambar = $_FILES['gambar'];

        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $foto_baru = "$nama.$ekstensi";

        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, "gambar/$foto_baru")){

            $query = "INSERT INTO contoh (upload, gambar) VALUES ('$upload', '$foto_baru')";
            $result = $db->query($query);
    
            if ($result) {
                echo "
                <script>
                    alert('Data Telah Berhasil Ditambahkan');
                    document.location.href = 'read.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                </script>";
            }
        }
    }

?>