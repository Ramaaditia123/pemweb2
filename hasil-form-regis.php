<?php

// mengecek apakah tombol submit sudah ditekan atau belum jika belum maka akan diarahkan kembali ke form-registrasi.php
if (!isset($_POST['submit'])) {
  header("Location: form-registrasi.php");
  // menghentikan proses
  exit;
}

// mengambil data dari file data-form-regis.php
require_once 'proses-registrasi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
  <title>Hasil Registrasi IT Club Data Science</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="mx-auto mt-5 border border-2 border-dark p-3 bg-success text-white rounded" style="width: 45%;">
    <h3 class="text-center">Hasil Registrasi IT Club Data Science</h3>
    <table class="table border border-2 border-success mt-3 text-white w-75 mx-auto">
      <thead>
        <tr>
          <td>NIM</td>
          <td>:</td>
          <td><?= $nim; ?></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>NAMA</td>
          <td>:</td>
          <td><?= $nama; ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?= $jk; ?></td>
        </tr>
        <tr>
          <td>Program Studi</td>
          <td>:</td>
          <td><?= $prodi; ?></td>
        </tr>
        <tr>
          <td>Skill</td>
          <td>:</td>
          <td><?= implode(", ", $skill_pilihan); ?></td>
        </tr>
        <tr>
          <td>Skor Skill</td>
          <td>:</td>
          <td><?= $skor_skill; ?></td>
        </tr>
        <tr>
          <td>Kategori Skill</td>
          <td>:</td>
          <td><?= $kategori_skill; ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><?= $email; ?></td>
        </tr>
        <tr>
          <td>Domisili</td>
          <td>:</td>
          <td><?= $domisili; ?></td>
        </tr>
      </tbody>
    </table>
    <div class="text-center my-3">
      <a href="form-registrasi.php" class="btn btn-warning">Kembali</a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>