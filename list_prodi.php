<?php 

require_once 'dbkoneksi.php';
// 1). Buat Query data prodi
$sql = "SELECT * FROM prodi";
// 2). Eksekusi Query SQL
$rs = $dbh->query($sql);
// 3). Tampilkan Data Hasil Query
//foreach($rs as $row) {
 //   echo '<br>' .$row->kode  . ' - ' . $row->nama;
//}
?>
<table border="1" width="100%">
    <tr>
        <th>Kode</th>
        <th>Nama Prodi</th>
        <th>Kepala Prodi</th>
        <th>Aksi</th>
    </tr>
    <?php foreach($rs as $row) { ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $row->kode; ?></td>
        <td><?php echo $row->nama; ?></td>
        <td><?php echo $row->kaprodi; ?></td>
        <td>
            <a href="form_prodi.php?id_edit=<?php echo $row->id; ?>">Edit</a>
            <a href="proses_prodi.php?id_delete=<?php echo $row->id; ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>