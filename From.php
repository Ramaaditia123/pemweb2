<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tugas 1 Data</title>
    <style>
        body {
            padding: 30px;
        }
    </style>
</head>
<body>
    <?php 
    $ns1 = ['id'=>1,'nim'=>'01101','nama'=>'Javri','uts'=>80,'uas'=>80,'tugas'=>75]; 
    $ns2 = ['id'=>2,'nim'=>'01102','nama'=>'KING Bili','uts'=>90,'uas'=>94,'tugas'=>69]; 
    $ns3 = ['id'=>3,'nim'=>'01103','nama'=>'Syahrill','uts'=>70,'uas'=>83,'tugas'=>86]; 
    $ns4 = ['id'=>4,'nim'=>'01104','nama'=>'Rojali','uts'=>80,'uas'=>80,'tugas'=>78]; 

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4]; 
    ?>

    <h1>Daftar Nilai Mahasiswa</h1>
    <br>
    <table class="table table-striped table-dark" style="text-align: center;">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>UTS</th> 
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th> 
            </tr>
        </thead>
        <tbody style="text-align: center;">
            <?php 
                $nomer = 1;
                foreach ($ar_nilai as $ns) {
                    echo '<tr>';
                    echo '<td>'.$nomer.'</td>'; 
                    echo '<td>'.$ns['nim'].'</td>'; 
                    echo '<td>'.$ns['nama'].'</td>'; 
                    echo '<td>'.$ns['uts'].'</td>'; 
                    echo '<td>'.$ns['uas'].'</td>'; 
                    echo '<td>'.$ns['tugas'].'</td>'; 
                    $nilai_akhir  = ($ns['uts'] * 0.40 + $ns['uas'] * 0.50 + $ns['tugas']* 0.10); 
                    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>'; 
                    echo '<tr/>'; 
                    // tentukan predikat
                    if ($nilai_akhir >= 85) {
                        $predikat = 'A'; }
                        elseif ($nilai_akhir >= 70) {
                            $predikat = 'B'; }
                            elseif ($nilai_akhir >= 55) {
                                $predikat = 'C'; }
                                elseif ($nilai_akhir >= 40) {
                                    $predikat = 'D'; }
                                    else {
                                        $predikat = 'E'; }
                                        echo '<td>'.$predikat.'</td>';
                    $nomer++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>