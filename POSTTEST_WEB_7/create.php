<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                    alert('akses ditolak silahkan login dulu')
                    document.location.href = 'login.php';
                </script>";
    }
?>

<?php
    require 'koneksi.php';

if ( isset($_POST['create']) ) {
    $Nama = $_POST['Nama'];
    $Tanggal_Booking = $_POST['Tanggal_Booking'];
    $Jenis_Kulit = $_POST['Jenis_Kulit'];
    $Metode_Pembayaran = $_POST['Metode_Pembayaran'];
    $Kondisi_Muka = $_POST['Kondisi_Muka'];

    $sql = "INSERT INTO makeup (Nama, Tanggal_Booking, Jenis_Kulit, Metode_Pembayaran, Kondisi_Muka)
            VALUES ('$Nama', '$Tanggal_Booking', '$Jenis_Kulit', '$Metode_Pembayaran', '$Kondisi_Muka')";

    $result = mysqli_query($conn, $sql);

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
            document.location.href = 'create.php';
        </script>";
    }
}
?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JASA BOOKING MAKE UP </title>
    <link rel = "stylesheet" href = "style-booking.css">
</head>
<body>
    <div class = "container">
    <h1> BOOKING JASA MAKE UP </h1>
    
    <form method = "POST" align = center>

        <div>
            <label> <br> <br> <br> Nama </label> <br>
            <input name = "nama" type = "text" placeholder = "Masukkan Nama" class = "nama" required>
        </div>

        <div>
            <label> <br> Tanggal Booking </label> <br>
            <input name = "tanggal_lahir" type = "date">
        </div>
        

        <div>
            <br> Jenis Kulit : <br>
            <input type = "radio" name = "jenis_kulit"> Kering </br>
            <input type = "radio" name = "jenis_kulit"> Normal </br>
            <input type = "radio" name = "jenis_kulit"> Berminyak </br>
            <input type = "radio" name = "jenis_kulit"> Sensitif </br>
            <input type = "radio" name = "jenis_kulit"> Kombinasi </br>
        </div>


        <div>
        <br> Metode Pembayaran <br>
        <select name = "bayar">
        <option value = "" > --Pilih Metode-- </option>
        <option value = "1"> 1. BRI </option>
        <option value = "2"> 2. BNI </option>
        <option value = "3"> 3. MANDIRI </option>
        <option value = "4"> 4. BCA </option>
        <option value = "5"> 5. DANA </option>
        </select>

        <div>
        <br> Bukti Pembayaran <br>
        <input type = "file" name = "gambar"><br><br>


        <div>
            <br> Kondisi Muka : <br>
            <input type = "checkbox" name = "kondisi[]" value = "1"/> Berjerawat <br>
            <input type = "checkbox" name="kondisi[]" value = "2"/> Beruntusan <br>
            <input type = "checkbox" name="kondisi[]" value = "3"/> Kemerahan <br> <br>
        </div>

        <center> <button type = "submit" class = "btn btn-primary" name = "tambah" id = "tambah">  Tambah </button> </center>
        
    </form>
</body>
</html>
