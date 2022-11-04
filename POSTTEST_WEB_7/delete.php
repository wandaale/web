<?php
require 'koneksi.php';

$Nama = $_GET['Nama'];

$result = mysqli_query($conn, "DELETE FROM makeup WHERE Nama = $Nama");

if ($result) {
    echo "
    <script>
        alert('Data Telah Berhasil Dihapus');
        document.location.href = 'read.php';
    </script>";
} else {
    echo "
    <script>
        alert('Data Gagal Dihapus');
        document.location.href = 'hapus.php?Nama=$Nama';
    </script>";
}
?>   