<?php 
/**
 * fungsi untuk menghitung nilai akhir mahasiswa
 * @param $nilai_uts Nilai UTS (0-100)
 * @param $nilai_uas Nilai UAS (0-100)
 * @param $nilai_tugas Nilai Tugas/Praktikum (0-100)
 * @return Nilai akhir mahasiswa 
 */
function nilai_akhir($nilai_uts, $nilai_uas, $nilai_tugas) {
    define("NILAI_UTS", 0.3);
    define("NILAI_UAS", 0.3);
    define("NILAI_TUGAS", 0.4);
    $nilai_akhir = (NILAI_UTS * $nilai_uts) + (NILAI_UAS * $nilai_uas) + (NILAI_TUGAS * $nilai_tugas);
    return $nilai_akhir;
}   
function kelulusan($nilai){
    define ("NILAI_MINIMAL", 60);
    if($nilai >= NILAI_MINIMAL){
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}
?>