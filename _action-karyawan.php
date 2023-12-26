<?php
include('koneksi.php');

if (isset($_POST['action'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $role = $_POST['role'];

    if ($_POST['action'] == 'tambah') {
        $query = mysqli_query($koneksi, "INSERT INTO karyawan SET nama='$nama', tempat_lahir='$tempat_lahir',
                                                                tanggal_lahir='$tanggal_lahir', alamat='$alamat', role='$role'");

        if ($query) {
            header('Location: index.php');
        } else {
            echo "Ada yang salah";
        }
    } else if ($_POST['action'] == 'edit') {
        $id = $_POST['id'];
        $query = mysqli_query($koneksi, "UPDATE karyawan SET nama='$nama', tempat_lahir='$tempat_lahir',
                                                                tanggal_lahir='$tanggal_lahir', alamat='$alamat', role='$role' WHERE id='$id'");

        if ($query) {
            header('Location: index.php');
        } else {
            echo "Ada yang salah";
        }
    }
} else {
    if ($_GET['action'] == 'hapus') {
        $id = $_GET['id_karyawan'];
        $query = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id='$id'");

        if ($query) {
            header('Location: index.php');
        } else {
            echo "Ada yang salah";
        }
    }
}
