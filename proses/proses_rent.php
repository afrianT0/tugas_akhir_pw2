<?php
include 'koneksi.php';

$id = $_POST['idOrders'];
$nama = $_POST['nama'];
$hp = $_POST['noHP'];
$idn = $_POST['idn'];
$noidn = $_POST['noidn'];
$mobil = $_POST['kode'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$satuan = 'Days';
$total = $_POST['total'];
$tgl = date("Y-m-d");
$stock = 1;

$sql = "INSERT INTO tbl_transaksi (id_transaksi, id_mobil, tgl_transaksi, nama_pelanggan, identitas, no_identitas, no_hp, harga, jumlah, satuan, total) VALUES 
                    ('$id','$mobil', '$tgl', '$nama', '$idn', '$noidn', '$hp', '$harga', '$jumlah', '$satuan', '$total')";

if (mysqli_query($con, $sql)) {
    $sql2 = "UPDATE tbl_mobil SET stock = stock - '$stock' WHERE id_mobil = '$mobil'";
    if (mysqli_query($con, $sql2)) {
        header('location: ../index.php?pesan=Order%20Berhasil\n\nAdmin%20segera%20menghubungi%20anda.');
        exit();
    } else {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
