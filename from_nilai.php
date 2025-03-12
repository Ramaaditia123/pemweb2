<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2>From Nilai Mahasiswa</h2>

    <?php
    $data_matkul = [
        'WEB1' => 'Pemrograman Web 1', 
        'WEB2' => 'Pemrograman Web 2', 
        'BASDAT' => 'Basis data', 
        'UI/UX' => 'UI/UX', 
        'JARKOM' => 'Jaringan komputer', 
    ]
     ?>

<form method= "POST" action="<?= $_SERVER['PHP_SELF']; ?>" METHOD="POST">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text1" name="text1" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
        <option value="WEB1">WEB1</option>
        <option value="WEB2">WEB2</option>
        <option value="BASDAT">BASDAT</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="text2" name="text2" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="text3" name="text3" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php 
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $matakuliah = $_POST['matakuliah']; 
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $tugas = $_POST['tugas'];
        $nilai_akhir = (0.3* $uts) + (0.3*$uas) + (0.4*$tugas) 
     }

 ?>    
 <h2>Hasil Perhitungan Mahasiswa</h2>
 <p>Nama Mahasiswa :<?= $nama; ?></p>
 <p>Mata Kuliah :<?= $matakuliah; ?></p>
 <p>Nilai UTS :<?= $uts; ?></p>
 <p>Nilai UAS :<?= $uas; ?></p>
 <p>Nilai Tugas/Praktikum :<?= $tugas; ?></p>
 <p>Nilai Akhir :<?= $nilai_akhir; ?></p>

</body>
</html>