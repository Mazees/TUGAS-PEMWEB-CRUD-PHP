<?php
include 'config.php';
$data = $mhs->getAllMahasiswa();
?>

<!DOCTYPE html>
<html lang="en" data-theme="forest">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body class="flex flex-col p-10 justify-center items-center h-screen w-screen">
    <h1 class="text-white font-bold text-4xl mb-5">LIST <span class="text-primary">MAHASISWA</span></h1>
    <div class="w-full lg:w-5xl"><a href="add.php" class="btn w-xs btn-neutral mt-2">TAMBAHKAN MAHASISWA</a></div>
    <div
        class="overflow-x-scroll w-full lg:w-5xl h-[300px] overflow-y-auto mt-3 rounded-box border border-base-content/5 bg-base-100">
        <table class="table lg:table-lg">
            <!-- head -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Prodi</th>
                    <th>Fakultas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $maha): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $maha['nama'] ?></td>
                        <td><?= $maha['npm'] ?></td>
                        <td><?= $maha['prodi'] ?></td>
                        <td><?= $maha['fakultas'] ?></td>
                        <td class="flex flex-col gap-3">
                            <a href="edit.php?id=<?= $maha['id'] ?>" class="btn btn-primary w-full lg:w-32">EDIT</a>
                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                href="delete.php?id=<?= $maha['id'] ?>" class="btn btn-error w-full lg:w-32">DELETE</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>