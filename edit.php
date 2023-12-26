<?php
include('koneksi.php');
$id = $_GET['id'];

$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id='$id'"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>

    <link rel="stylesheet" href="dist/output.css">
</head>

<body>
    <div class="max-w-7xl mx-auto py-5">
        <div class="flex justify-between items-center mb-14">
            <h1 class="text-white text-2xl font-bold">Edit <?= $data['nama'] ?></h1>
            <a href="." class="btn btn-warning">Batal</a>
        </div>

        <form action="_action-karyawan.php" method="post">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="mb-3">
                <label for="nama">Nama Karyawan</label>
                <input type="text" name="nama" value="<?= $data['nama'] ?>" placeholder="Nama Karyawan" class="input input-bordered w-full" />
            </div>
            <div class="mb-3 grid grid-cols-2 gap-3">
                <div>
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>" class="input input-bordered w-full" />
                </div>
                <div>
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" value="<?= $data['tempat_lahir'] ?>" placeholder="Tempat Lahir" class="input input-bordered w-full" />
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="w-full textarea textarea-bordered" placeholder="Alamat"><?= $data['alamat'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="role">Role</label>
                <select name="role" class="select select-bordered w-full">
                    <option disabled>Pilih Role?</option>
                    <option value="Desainer" <?= $data['role'] == 'Desainer' ? 'selected' : '' ?>>Desainer</option>
                    <option value="Programmer" <?= $data['role'] == 'Programmer' ? 'selected' : '' ?>>Programmer</option>
                    <option value="HR" <?= $data['role'] == 'HR' ? 'selected' : '' ?>>HR</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</body>

</html>
