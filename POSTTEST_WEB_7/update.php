<?php
require 'koneksi.php';

$Nama = $_GET['Nama'];

$result = mysqli_query($conn, "SELECT * FROM makeup WHERE Nama = $Nama");

$data = [];

while ($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

$data = $data[0];

if ( isset($_POST['update']) ) {
    $Nama = $_POST['Nama'];
    $Tanggal_Booking = $_POST['Tanggal_Booking'];
    $Jenis_Kulit = $_POST['Jenis_Kulit'];
    $Metode_Pembayaran = $_POST['Metode_Pembayaran'];
    $Kondisi_Muka = $_POST['Kondisi_Muka'];

    $sql = "UPDATE posttest5 SET Nama = '$Nama', Tanggal_Booking = '$Tanggal_Booking', Jenis_Kulit = '$Jenis_Kulit', Metode_Pembayaran = '$Metode_Pembayaran', Kondisi_Muka = '$Kondisi_Muka' WHERE Nama = $Nama";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "
        <script>
            alert('Data Telah Berhasil Diperbarui');
            document.location.href = 'read.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Diperbarui');
            document.location.href = 'edit.php?Nama=$Nama';
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
    <title>Document</title>
</head>
<body>
    <h2 style = "text-align : center;"> UPDATE DATA PELANGGAN </h2> <br>
    <form action = "" method = "POST">
        <div>
            <label> <br> <br> <br> Nama </label> <br>
            <input name = "Nama" type = "text" placeholder = "Masukkan Nama" class = "Nama" value = "<?php echo $data['Nama'] ?>" required>
        </div>

        <div>
            <label> <br> Tanggal Booking </label> <br>
            <input name = "Tanggal_Booking" type = "date" value = "<?php echo $data['Tanggal_Booking'] ?>">
        </div>
        

        <div>
            <br> Jenis Kulit : <br>
            <input type = "radio" name = "jenis_kulit" value = "<?php echo $data['Jenis_Kulit'] ?>"> Kering </br>
            <input type = "radio" name = "jenis_kulit" value = "<?php echo $data['Jenis_Kulit'] ?>"> Normal </br>
            <input type = "radio" name = "jenis_kulit" value = "<?php echo $data['Jenis_Kulit'] ?>"> Berminyak </br>
            <input type = "radio" name = "jenis_kulit" value = "<?php echo $data['Jenis_Kulit'] ?>"> Sensitif </br>
            <input type = "radio" name = "jenis_kulit" value = "<?php echo $data['Jenis_Kulit'] ?>"> Kombinasi </br>
        </div>


        <div>
        <br> Metode Pembayaran <br>
        <select name = "bayar">
        <option value = "" > --Pilih Metode-- </option>
        <option value = "1" value = "<?php echo $data['Metode_Pembayaran'] ?>"> 1. BRI </option>
        <option value = "2" value = "<?php echo $data['Metode_Pembayaran'] ?>"> 2. BNI </option>
        <option value = "3" value = "<?php echo $data['Metode_Pembayaran'] ?>"> 3. MANDIRI </option>
        <option value = "4" value = "<?php echo $data['Metode_Pembayaran'] ?>"> 4. BCA </option>
        <option value = "5" value = "<?php echo $data['Metode_Pembayaran'] ?>"> 5. DANA </option>
        </select>


        <div>
            <br> Kondisi Muka : <br>
            <input type = "checkbox" name = "kondisi[]" value = "1" value = "<?php echo $data['Kondisi_Muka'] ?>"/> Berjerawat <br>
            <input type = "checkbox" name="kondisi[]" value = "2" value = "<?php echo $data['Kondisi_Muka'] ?>"/> Beruntusan <br>
            <input type = "checkbox" name="kondisi[]" value = "3" value = "<?php echo $data['Kondisi_Muka'] ?>"/> Kemerahan <br> <br>
        </div>

</body>
</html>