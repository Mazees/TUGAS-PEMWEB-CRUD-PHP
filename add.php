<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $data = $_POST;
    $mhs->insertMahasiswa($data['nama'], $data['npm'], $data['prodi'], $data['fakultas']);
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="forest">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body class="flex flex-col justify-center items-center h-screen w-screen">
    <h1 class="text-white font-bold text-4xl mb-5">TAMBAH <span class="text-primary">MAHASISWA</span></h1>
    <form method="POST">
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
            <legend class="fieldset-legend">Formulir</legend>
            <label class="label">Nama</label>
            <input type="text" class="input" name="nama" placeholder="Masukkan Nama" />

            <label class="label">NPM</label>
            <input type="text" class="input" name="npm" placeholder="Masukkan NPM" />

            <label class="label">Program Studi</label>
            <input type="text" class="input" name="prodi" placeholder="Masukkan Prodi" />

            <label class="label">Fakultas</label>
            <input type="text" class="input" name="fakultas" placeholder="Masukkan Fakultas" />
            <button type="submit" name="submit" class="btn btn-primary mt-3">SUBMIT</button>
        </fieldset>
    </form>
</body>

</html>