<?php
include('koneksi.php');

$nama = htmlspecialchars($_POST['nama']);
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$role = $_POST['role'];

$query = mysqli_query($koneksi, "INSERT INTO karyawan SET nama='$nama', tempat_lahir='$tempat_lahir',
                                                            tanggal_lahir='$tanggal_lahir', alamat='$alamat', role='$role'");

if ($query) {
    header('Location: index.php');
} else {
    echo "Ada yang salah";
}
