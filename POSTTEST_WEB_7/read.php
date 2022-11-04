<?php
require 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM posttest5")

$data_pelanggan = [];

while ($row = mysqli_fetch_assoc($result)){
    $data_pelanggan[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<div class = "container d-flex align-items-center justify-content-between">
    <h1> DAFTAR BOOKINGAN </h1>
    <a class = "btn btn-primary" style = "height: 40 px;" href = "create.php" role = "button"> Tambah </a>
</div>

<table class = "table">
    <thead class = "thead-light">
        <tr>
            <th scope = "col"> Nama </th>
            <th scope = "col"> Tanggal Booking </th>
            <th scope = "col"> Jenis Kulit </th>
            <th scope = "col"> Metode_Pembayaran </th>
            <th scope = "col"> Kondisi_Muka </th>
            <th scope = "col"> Aksi </th>
        </tr>

    </thead>
    <tbody>
        <?php $i = 1; foreach($data_pelanggan as $data) :?>
        <tr>
            <td><?php echo $data["Nama"]; ?></td>
            <td><?php echo $data["Tanggal_Booking"]; ?></td>
            <td><?php echo $data["Jenis_Kulit"]; ?></td>
            <td><?php echo $data["Metode_Pembayaran"]; ?></td>
            <td><?php echo $data["Kondisi_Muka"]; ?></td>
            <td>
                <a class = "btn btn-succes" href = "edit.php?Nama=<?php echo $data["Nama"]; ?>" role = "button"><i class = "fas fa-pencil-alt"></i></a>
                <a class = "btn btn-danger" href = "hapus.php?Nama=<?php echo $data["Nama"]; ?>" onclick = "return confirm ('Yakin Ingin Menghapus Data Ini?');" role = "button"><i class = "fas fa-trash"></i></a>
            </td>
        </tr>
        <?php $i++; endforeach; ?>
    </tbody>
</table>



