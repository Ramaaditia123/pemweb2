<?php

// mengambil data dari file data-form-regis.php
require_once "data-form-regis.php";

// menangkap semua data yang dikirimkan dari form dengan variable global $_POST karena method form menggunakan POST
$nim = $_POST['nim'];
$nama = $_POST['nama_lengkap'];
$jk = $_POST['jenis_kelamin'];
$prodi = $_POST['program_studi'];
$skill_pilihan = $_POST['skills'];
$email = $_POST['email'];
$domisili = $_POST['domisili'];

// menghitung jumlah skor skill yang dimiliki menggunakan fungsi skor_skill
$skor_skill = skor_skill($skill_pilihan, $ar_skill);

// mengkategorikan skor skill yang dimiliki menggunakan fungsi kategori_skill
$kategori_skill = kategori_skill($skor_skill);


// membuat fungsi untuk menghitung skor skill yang dimiliki berdasarkan skill yang dipilih
function skor_skill($skill_pilihan, $ar_skill)
{
  // mendeklarasikan variabel skor dengan nilai awal 0
  $skor = 0;

  // melakukan perulangan untuk setiap skill yang dipilih
  foreach ($skill_pilihan as $skill) {
    // mengecek apakah skill yang dipilih ada di dalam array skill yang ada
    if (isset($ar_skill[$skill])) {

      // jika ada, maka skor akan ditambahkan dengan skor skill yang ada di array skill
      $skor += $ar_skill[$skill];
    }
  }

  // mengembalikan nilai skor
  return $skor;
}

// membuat fungsi untuk mengkategorikan skor skill yang dimiliki
function kategori_skill($skor_skill = 0)
{
  // menggunakan switch case untuk mengkategorikan skor skill
  switch ($skor_skill) {
      // jika skor skill kurang dari sama dengan 0, maka kategori skill adalah "Tidak Ada"
    case 0:
      return "Tidak Ada";
      break;
      // jika skor skill kurang dari sama dengan 40, maka kategori skill adalah "Kurang"
    case $skor_skill <= 40:
      return "Kurang";
      break;
      // jika skor skill kurang dari sama dengan 60, maka kategori skill adalah "Cukup"
    case $skor_skill <= 60:
      return "Cukup";
      break;
      // jika skor skill kurang dari sama dengan 100, maka kategori skill adalah "Baik"
    case $skor_skill <= 100:
      return "Baik";
      break;
      // jika skor skill kurang dari sama dengan 150, maka kategori skill adalah "Sangat Baik"
    case $skor_skill <= 150:
      return "Sangat Baik";
      break;
      // jika skor skill lebih dari 150, maka kategori skill adalah "Luar Biasa"
    default:
      return "Tidak Terkategori";
      break;
  }
}
