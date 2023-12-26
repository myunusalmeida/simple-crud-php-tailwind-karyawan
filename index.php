<?php
session_start();
include('koneksi.php');

if (!isset($_SESSION['user_id'])) {
?>
    <script>
        alert('Kamu belum login');
        window.location.href = 'login.php';
    </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="dist/output.css">
</head>

<body>
    <div class="max-w-7xl mx-auto py-5">
        <div class="flex justify-between items-center mb-14">
            <h1 class="text-white text-2xl font-bold">Data Karyawan</h1>
            <a href="tambah.php" class="btn btn-primary">Tambah karyawan baru</a>
        </div>

        <div class="overflow-x-auto mb-10">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th></th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Alamat</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM karyawan");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th><?= $no++ ?></th>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['tanggal_lahir'] ?></td>
                            <td><?= $data['tempat_lahir'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['role'] ?></td>
                            <td>
                                <div class="flex gap-2">
                                    <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="_action-karyawan.php?action=hapus&id_karyawan=<?= $data['id'] ?>" onclick="return confirm('Kamu Yakin ingin menghapus data ini?')" class="btn btn-error btn-sm">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="flex justify-center mt-10">
            <a href="_action-logout.php" class="text-red-500 font-bold">Logout</a>
        </div>
    </div>
</body>

</html>
