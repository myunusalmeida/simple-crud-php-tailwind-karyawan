<?php
include('koneksi.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/output.css">
</head>

<body>
    <div class="max-w-7xl mx-auto py-5">
        <div class="flex justify-between items-center mb-14">
            <h1 class="text-white text-2xl font-bold">Data Karyawan</h1>
            <a href="tambah.php" class="btn btn-primary">Tambah karyawan baru</a>
        </div>

        <div class="overflow-x-auto">
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
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
