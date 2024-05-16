<!DOCTYPE html>
<html>
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
            margin-left: 10px;
        }
    </style>
</head>
<body>


<?php
// Database connection
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
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

    // File uploads
    $user_picture_name = isset($_FILES['user-picture']['name']) ? $_FILES['user-picture']['name'] : ''; 
    $user_picture_tmp = isset($_FILES['user-picture']['tmp_name']) ? $_FILES['user-picture']['tmp_name'] : ''; 
    if (!empty($user_picture_tmp)) {
        $user_picture = "uploads/" . $user_picture_name;
        move_uploaded_file($user_picture_tmp, $user_picture); 
    } 

    $sign_name = isset($_FILES['sign']['name']) ? $_FILES['sign']['name'] : ''; 
    $sign_tmp = isset($_FILES['sign']['tmp_name']) ? $_FILES['sign']['tmp_name'] : '';
    if (!empty($sign_tmp)) {
        $sign = "uploads/" . $sign_name;
        move_uploaded_file($sign_tmp, $sign); 
    } 

    // Check if IC number exists in the database
        $sql_check = "SELECT * FROM candidates WHERE icNo = '$icNo'";
        $result_check = mysqli_query($con, $sql_check);
        $num_rows = mysqli_num_rows($result_check);

        if ($num_rows > 0) {
            // IC number exists, update the record
            $sql = "UPDATE candidates 
                    SET name = '$nama', regNo = '$regNo', phoneNo = '$phoneNo', program = '$program', jabatan = '$jabatan', hpnm = '$hpnm', 
                        ulang_semester = '$ulang_semester', tindakan_tatatertib = '$tindakan_tatatertib', sedang_tatatertib = '$sedang_tatatertib', 
                        exco = '$exco', date = '$date', user_picture = '$user_picture_name', sign = '$sign_name' 
                    WHERE icNo = '$icNo'";
        } else {
            // IC number does not exist, insert a new record
            $sql = "INSERT INTO candidates (name, icNo, regNo, phoneNo, program, jabatan, hpnm, ulang_semester, tindakan_tatatertib, sedang_tatatertib, exco, date, user_picture, sign)
                    VALUES ('$nama', '$icNo', '$regNo', '$phoneNo', '$program', '$jabatan', '$hpnm', '$ulang_semester', '$tindakan_tatatertib', '$sedang_tatatertib', '$exco', '$date', '$user_picture_name', '$sign_name')";
        }
        
    if (mysqli_query($con, $sql)) {
        header("location: candidate_save.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}
?>



<form method="POST" enctype="multipart/form-data">
    <img src="images/PbuLogo.png" alt="Politeknik Balik Pulau Logo">
    <h2><center>Borang Penamaan Calon Pilihan Raya Kampus</center></h2>

    <section class="upload-section">
        <h4>Muat Naik Gambar</h4>
        <input type="file" id="user-picture" name="user-picture">
    </section>
    
    <section>
        <h3>A) Butir-Butir Calon</h3>
        <table>
            <tr>
                <td><label for="nama">Nama Penuh:</label></td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="icNo">No. Kad Pengenalan:</label></td>
                <td><input type="text" id="icNo" name="icNo" required></td>
            </tr>
            <tr>
                <td><label for="regNo">No. Pendaftaran:</label></td>
                <td><input type="text" id="regNo" name="regNo" required></td>
            </tr>
            <tr>
                <td><label for="phoneNo">No. Telefon Bimbit:</label></td>
                <td><input type="tel" id="phoneNo" name="phoneNo" required></td>
            </tr>
            <tr>
                <td><label for="program">Program:</label></td>
                <td><input type="text" id="program" name="program" required></td>
            </tr>
            <tr>
                <td><label for="jabatan">Jabatan:</label></td>
                <td><input type="text" id="jabatan" name="jabatan" required></td>
            </tr>
        </table>
    </section>

    <section>
        <h3>B) Kelayakan</h3>
        <table>
            <tr>
                <td><label for="hpnm">Himpunan Nilai Mata (HPNM) Terkini:</label>
                <td><input type="text" id="hpnm" name="hpnm" required><br><br>
            </tr>

        <tr>
        <td>Pernah mengulang semester?</td>
            <td>
                <div class="radio-group">
                    <input type="radio" id="ulang_semester_ya" name="ulang_semester" value="YA">
                    <label for="ulang_semester_ya">YA</label>

                    <input type="radio" id="ulang_semester_tidak" name="ulang_semester" value="TIDAK">
                    <label for="ulang_semester_tidak">TIDAK</label>
                </div>
            </td>
        </tr>

        <td>Pernah dikenakan tindakan tatatertib?</td>
            <td>
                <div class="radio-group">
                    <input type="radio" id="tindakan_tatatertib_ya" name="tindakan_tatatertib" value="YA">
                    <label for="tindakan_tatatertib_ya">YA</label>
                    <input type="radio" id="tindakan_tatatertib_tidak" name="tindakan_tatatertib" value="TIDAK">
                    <label for="tindakan_tatatertib_tidak">TIDAK</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Sedang menunggu tindakan tatatertib?</td>
            <td>
                <div class="radio-group">
                    <input type="radio" id="sedang_tatatertib_ya" name="sedang_tatatertib" value="YA">
                    <label for="sedang_tatatertib_ya">YA</label>
                    <input type="radio" id="sedang_tatatertib_tidak" name="sedang_tatatertib" value="TIDAK">
                    <label for="sedang_tatatertib_tidak">TIDAK</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Pernah menjadi exco MPP sebelum ini?</td>
            <td>
                <div class="radio-group">
                    <input type="radio" id="exco_ya" name="exco" value="YA">
                    <label for="exco_ya">YA</label>
                    <input type="radio" id="exco_tidak" name="exco" value="TIDAK">
                    <label for="exco_tidak">TIDAK</label>
                </div>
            </td>
        </tr>
    </table>
</section>

<section>
    <h3>C) PENGAKUAN PEMOHON</h3>
    <table>
            <td>Saya sesungguhnya mengaku bahawa segala maklumat yang diberikan dalam borang ini adalah benar belaka.</td>
        </tr>
        <tr>
            <td><label for="sign">Tandatangan Digital:</label></td>
            <td><input type="file" id="sign" name="sign" required></td>
        </tr>
        <tr>
            <td><label for="date">Tarikh:</label></td>
            <td><input type="text" id="date" name="date" required></td>
        </tr>
    </table>
</section>

<input type="submit" value="Hantar">
</form>

</body>
</html>