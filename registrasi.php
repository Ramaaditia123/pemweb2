<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
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
            background: linear-gradient(135deg, #2575fc, #6a11cb);
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
</head>
<body>
<div class="container px-5 my-5">
    <div class="card p-4">
        <h2 class="text-center mb-4"><i class="fas fa-user-edit"></i> Form Pendaftaran</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
                <label class="form-label" for="nim"><i class="fas fa-id-card"></i> NIM</label>
                <input class="form-control" name="nim" type="text" placeholder="NIM" required />
            </div>
            <div class="mb-3">
                <label class="form-label" for="namaLengkap"><i class="fas fa-user"></i> Nama Lengkap</label>
                <input class="form-control" name="namaLengkap" type="text" placeholder="Nama Lengkap" required />
            </div>
            <div class="mb-3">
                <label class="form-label d-block"><i class="fas fa-venus-mars"></i> Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="pria" type="radio" name="jenisKelamin" value="Pria" required />
                    <label class="form-check-label" for="pria">Pria</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="perempuan" type="radio" name="jenisKelamin" value="Perempuan" required />
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="rahasia" type="radio" name="jenisKelamin" value="Rahasia" required />
                    <label class="form-check-label" for="rahasia">Rahasia</label>
                </div>
            </div>
            <?php 
                $prodi = [
                    "TI" => "Teknik Informatika",
                    "SI" => "Sistem Informasi",
                    "BD" => "Bisnis Digital"
                ];
            ?>
            <div class="mb-3">
                <label class="form-label" for="programStudi"><i class="fas fa-graduation-cap"></i> Program Studi</label>
                <select class="form-select" name="programStudi" aria-label="Program Studi" required>
                    <option value="">-- Pilih Program Studi --</option>
                    <?php 
                    foreach ($prodi as $k => $v) {  
                        echo "<option value='$k'>$v</option>";
                    } 
                    ?>
                </select>
            </div>
            <?php  
                $ar_skill = [
                    "HTML" => 10,
                    "CSS" => 10,
                    "JavaScript" => 20,
                    "RWD Bootstrap" => 20,
                    "PHP" => 30,
                    "Python" => 30,
                    "Java" => 50
                ];
            ?>
            <div class="mb-3">
                <label class="form-label d-block"><i class="fas fa-code"></i> Skill & Web Programming</label>
                <?php 
                    foreach($ar_skill as $k => $v) {
                        echo "<div class='form-check form-check-inline'>
                                <input class='form-check-input' type='checkbox' name='skill[]' value='$k' id='$k' />
                                <label class='form-check-label' for='$k'>$k ($v)</label>
                              </div>";
                    }
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label" for="domisili"><i class="fas fa-map-marker-alt"></i> Domisili</label>
                <input class="form-control" name="domisili" type="text" placeholder="Domisili" required />
            </div>
            <div class="mb-3">
                <label class="form-label" for="email"><i class="fas fa-envelope"></i> Email</label>
                <input class="form-control" name="email" type="email" placeholder="Email" required />
            </div>
            <div class="d-grid">
                <button name="submit" class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i> Submit</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $namaLengkap = $_POST['namaLengkap'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $programStudi = $_POST['programStudi'];
        $domisili = $_POST['domisili'];
        $email = $_POST['email'];
        $skills = isset($_POST['skill']) ? $_POST['skill'] : [];

        $totalSkor = 0;
        foreach ($skills as $skill) {
            $totalSkor += $ar_skill[$skill];
        }
        if ($totalSkor == 0) {
            $predikat = "Tidak Memadai";
        } elseif ($totalSkor > 0 && $totalSkor <= 40) {
            $predikat = "Tidak Memadai";
        } elseif ($totalSkor > 40 && $totalSkor <= 60) {
            $predikat = "Kurang";
        } elseif ($totalSkor > 60 && $totalSkor <= 100) {
            $predikat = "Cukup";
        } elseif ($totalSkor > 100 && $totalSkor <= 150) {
            $predikat = "Baik";
        } else {
            $predikat = "Sangat Baik";
        }
    ?>
    <div class="card mt-4 p-4">
        <h2 class="text-center mb-4"><i class="fas fa-table"></i> Hasil Submit</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Skill</th>
                    <th>Skor Skill</th>
                    <th>Predikat</th>
                    <th>Domisili</th>
                    <th>Email</th> 
                </tr>
                <tr>
                    <td><?= $nim ?></td>
                    <td><?= $namaLengkap ?></td>
                    <td><?= $jenisKelamin ?></td>
                    <td><?= $prodi[$programStudi] ?></td>
                    <td><?= implode(", ", $skills) ?></td>
                    <td><?= $totalSkor ?></td>
                    <td><?= $predikat ?></td>
                    <td><?= $domisili ?></td>
                    <td><?= $email ?></td>
                </tr>
            </table>
        </div>
    </div>
    <?php } ?>
</div>
</body>
</html>