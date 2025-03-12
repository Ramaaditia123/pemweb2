<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            font-family: 'Arial', sans-serif;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 10px;
        }
        .btn-primary {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb)
        }
        .table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table th {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
        }
    </style>
<?php 
 require_once 'class_nilaimahasiswa.php';
 
 $mhs1 = new NilaiMahasiswa();
 $mhs1->nama = "Budi Rahman";
 $mhs1->matakuliah = "Pemrograman Web";
 $mhs1->nilai_uts = 80;
 $mhs1->nilai_uas = 85;  
 $mhs1->nilai_tugas = 90;
 
 $mhs2 = new NilaiMahasiswa();
 $mhs2->nama = "Annisa Rahma";
 $mhs2->matakuliah = "Dasar-Dasar Pemrograman";
 $mhs2->nilai_uts = 60;
 $mhs2->nilai_uas = 95;  
 $mhs2->nilai_tugas = 87;
 
 $mhs3 = new NilaiMahasiswa();
 $mhs3->nama = "Bedu Bahlil";
 $mhs3->matakuliah = "Tugas Akhir";
 $mhs3->nilai_uts = 40;
 $mhs3->nilai_uas = 55;  
 $mhs3->nilai_tugas = 67;
 
 $data_mhs = [$mhs1, $mhs2 , $mhs3];
 
 ?>
 <div class="card mt-4 p-4">
        <h2 class="text-center mb-4"><i class="fas fa-table"></i> Daftar Nilai Mahasiswa</h2>
        <div class="table-responsive">
        <table class="table table-bordered">
     <thead>
     <tr><th>No</th><th>Nama Lengkap</th>
         <th>Mata Kuliah</th><th>Nilai UTS</th><th>Nilai UAS</th>
         <th>Nilai Tugas</th><th>Nilai Akhir</th><th>Kelulusan</th>
     </tr>
     </thead>
     <tbody>
         <?php 
          $nomor = 1;
          foreach($data_mhs as $obj){
         ?>
 <tr>
     <td><?= $nomor ?></td><td style="text-align: center"><?=$obj->nama?></td>
     <td style="text-align: center"><?=$obj->matakuliah?></td><td style="text-align: center"><?=$obj->nilai_uts?></td>
     <td style="text-align: center"><?=$obj->nilai_uas?></td><td style="text-align: center"><?=$obj->nilai_tugas?></td>
     <td style="text-align: center"><?=$obj->getNilaiAkhir()?></td><td style="text-align: center"><?=$obj->kelulusan()?></td>
 </tr>
 <?php
         $nomor++; 
     }
 ?>
     </tbody>
 </table>
</body>
</html>