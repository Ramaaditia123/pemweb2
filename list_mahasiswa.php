<?php 
require_once "dbkoneksi.php"
// 4)
$sql = "SELECT* FROM mahasiswa";
// 5)
$rs = $dbh->query($sql)
// 6) ambil data
foreach($rs as $row) {
    echo '<br>'.$row->nim. ' - '.$row->nama;
}
?>