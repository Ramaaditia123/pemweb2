<?php 
require_once "dbkoneksi.php";
// 4) tangkap
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_kaprodi = $_POST['kaprodi'];
$_proses = $_POST['proses'];

// 5) definisikan
if($_proses == "Simpan"){
    $sql ="INSERT INTO prodi(kode, nama, kaprodi) VALUES (?,?,?);
}elseif($_proses=="Update"){
    $sql = "UPDATE prodi SET nama=?, kaprodi=?, kode=? WHERE id=?";
    $id_edit =$_POST['id_edit'];
    $ar_data[] = $id_edit;
}elseif($_proses=="Hapus");{
    $sql = "query hapus";}

?>