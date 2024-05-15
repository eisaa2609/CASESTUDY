<!DOCTYPE html>

<head>
    <title>Borang Penamaan Calon Pilihan Raya Kampus</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        form {
            display: inline-block;
            text-align: left;
            width: 60%;
        }
        .upload-section {
            text-align: left;
            margin-bottom: 20px;
        }
        .upload-section h4 {
            margin-bottom: 10px;
        }
        img {
            width: 150px; 
            display: block;
            margin: 0 auto 20px auto;
        }
        section {
            margin-bottom: 20px;
        }
        label {
            display: inline-block;
            width: 200px;
            vertical-align: top;
        }
        input[type="text"],
        input[type="tel"],
        input[type="file"],
        input[type="radio"] {
            margin-bottom: 10px;
        }
        input[type="submit"] {
            display: block;
            margin: 0 auto;
        }
        .radio-group {
            display: flex;
            align-items: center;
        }
        .radio-group label {
            width: auto;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Atien098";
$dbname = "candidate_nomination_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO candidates (nama, icNo, regNo, phoneNo, program, jabatan, hpnm, ulang_semester, tindakan_tatatertib, sedang_tatatertib, exco, sign, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $nama, $icNo, $regNo, $phoneNo, $program, $jabatan, $hpnm, $ulang_semester, $tindakan_tatatertib, $sedang_tatatertib, $exco, $sign, $date);

    // Set parameters and execute
    $nama = $_POST['nama'];
    $icNo = $_POST['icNo'];
    $regNo = $_POST['regNo'];
    $phoneNo = $_POST['phoneNo'];
    $program = $_POST['program'];
    $jabatan = $_POST['jabatan'];
    $hpnm = $_POST['hpnm'];
    $ulang_semester = $_POST['ulang_semester'];
    $tindakan_tatatertib = $_POST['tindakan_tatatertib'];
    $sedang_tatatertib = $_POST['sedang_tatatertib'];
    $exco = $_POST['exco'];
    $date = $_POST['date'];

    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["sign"]["name"]);
    if (move_uploaded_file($_FILES["sign"]["tmp_name"], $target_file)) {
        $sign = $target_file;
    } else {
        $sign = "";
    }

    if ($stmt->execute()) {
        header("Location: hantar.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>


<form method="POST" action="hantar.php" enctype="multipart/form-data">
    <img src="images/PbuLogo.png" alt="Politeknik Balik Pulau Logo">
    <h2><center>Borang Penamaan Calon Pilihan Raya Kampus</center></h2>

    <section class="upload-section">
        <h4>Muat Naik Gambar</h4>
        <input type="file" id="user-picture" name="user-picture">
    </section>
    
    <section>
        <h3>A) Butir-Butir Calon</h3>
        <label for="nama">Nama Penuh:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="icNo">No. Kad Pengenalan:</label>
        <input type="text" id="icNo" name="icNo" required><br>

        <label for="regNo">No. Pendaftaran:</label>
        <input type="text" id="regNo" name="regNo" required><br>

        <label for="phoneNo">No. Telefon Bimbit:</label>
        <input type="tel" id="phoneNo" name="phoneNo" required><br>

        <label for="program">Program:</label>
        <input type="text" id="program" name="program" required><br>

        <label for="jabatan">Jabatan:</label>
        <input type="text" id="jabatan" name="jabatan" required><br>
    </section>

    <section>
        <h3>B) Kelayakan</h3>
        <label for="hpnm">Himpunan Nilai Mata (HPNM) Terkini:</label>
        <input type="text" id="hpnm" name="hpnm" required><br><br>

        <label>Pernah mengulang semester?</label>
        <div class="radio-group">
            <input type="radio" id="ulang_semester_ya" name="ulang_semester" value="YA">
            <label for="ulang_semester_ya">YA</label>
            <input type="radio" id="ulang_semester_tidak" name="ulang_semester" value="TIDAK">
            <label for="ulang_semester_tidak">TIDAK</label>
        </div><br><br>

        <label>Pernah dikenakan tindakan tatatertib?</label>
        <div class="radio-group">
            <input type="radio" id="tindakan_tatatertib_ya" name="tindakan_tatatertib" value="YA">
            <label for="tindakan_tatatertib_ya">YA</label>
            <input type="radio" id="tindakan_tatatertib_tidak" name="tindakan_tatatertib" value="TIDAK">
            <label for="tindakan_tatatertib_tidak">TIDAK</label>
        </div><br><br>

        <label>Sedang menunggu tindakan tatatertib?</label>
        <div class="radio-group">
            <input type="radio" id="sedang_tatatertib_ya" name="sedang_tatatertib" value="YA">
            <label for="sedang_tatatertib_ya">YA</label>
            <input type="radio" id="sedang_tatatertib_tidak" name="sedang_tatatertib" value="TIDAK">
            <label for="sedang_tatatertib_tidak">TIDAK</label>
        </div><br><br>

        <label>Pernah menjadi exco MPP sebelum ini?</label>
        <div class="radio-group">
            <input type="radio" id="exco_ya" name="exco" value="YA">
            <label for="exco_ya">YA</label>
            <input type="radio" id="exco_tidak" name="exco" value="TIDAK">
            <label for="exco_tidak">TIDAK</label>
        </div><br><br>
    </section>

    <section>
        <h3>C) PENGAKUAN PEMOHON</h3>
        <p>Saya sesungguhnya mengaku bahawa segala maklumat yang diberikan dalam borang ini adalah benar belaka.</p>
        <label for="sign">Tandatangan Digital:</label>
        <input type="file" id="sign" name="sign" required><br>

        <label for="date">Tarikh:</label>
        <input type="text" id="date" name="date" required><br>
    </section>

    <input type="submit" value="Hantar">
</form>

</body>
</html>




