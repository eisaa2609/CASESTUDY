<!DOCTYPE html>
<head>
	<title>Borang Penamaan Calon Pilihan Raya Kampus</title>
</head>
    <style>
        body {
            font-family: Arial, sans-serif; /* Set a common font for better readability */
            text-align: center; /* Center align the body content */
            background-color: #f0f0f0; /* Set a light background color */
            padding-top: 20px; /* Add some top padding to the body */
        }

        form {
            display: inline-block; /* Ensure the form takes only the necessary width */
            text-align: left; /* Reset text alignment for form elements */
            background-color: #fff; /* Set a white background for the form */
            padding: 20px; /* Add some padding to the form */
            border-radius: 8px; /* Add rounded corners to the form */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow effect */
        }

        .upload-section {
            text-align: right; /* Align the upload section to the right */
        }

        h2 {
            color: #333; /* Set a dark color for headings */
        }

        h3 {
            color: #666; /* Set a slightly darker color for subheadings */
        }

        label {
            display: block; /* Display labels as block elements for better spacing */
            margin-bottom: 5px; /* Add some bottom margin to labels */
        }

        input[type="text"],
        input[type="tel"],
        input[type="file"],
        input[type="radio"],
        input[type="date"],
        textarea {
            width: 100%; /* Make form inputs full width */
            padding: 8px; /* Add some padding to form inputs */
            margin-bottom: 10px; /* Add some bottom margin to form inputs */
            border: 1px solid #ccc; /* Add a light border to form inputs */
            border-radius: 4px; /* Add rounded corners to form inputs */
            box-sizing: border-box; /* Include padding and border in input's total width */
        }

        input[type="submit"] {
            background-color: #007bff; /* Set a primary color for the submit button */
            color: #fff; /* Set text color to white */
            padding: 10px 20px; /* Add padding to the button */
            border: none; /* Remove border */
            border-radius: 4px; /* Add rounded corners */
            cursor: pointer; /* Change cursor to pointer on hover */
            transition: background-color 0.3s; /* Add transition effect */
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Darken the button color on hover */
        }
    </style>

<body>


<form>
<img src="D:\xampp\htdocs\webproFatin\CASE STUDY\PbuLogo.png" alt="Politeknik Balik Pulau Logo">
  <h2><center>Borang Penamaan Calon Pilihan Raya Kampus</center></h2>
  
  <section class="upload-section">
    <h3>Upload Your Picture</h3>
    <input type="file" id="user-picture" name="user-picture"><br><br>
   </section>

  
  <section>
    <h3>A) Butir-Butir Calon</h3>
    <label for="nama-penuh">Nama Penuh:</label>
    <input type="text" id="nama-penuh" name="nama-penuh"><br><br>
    <label for="no-kad-pengenalan">No. Kad Pengenalan:</label>
    <input type="text" id="no-kad-pengenalan" name="no-kad-pengenalan"><br><br>
    <label for="no-pendaftaran">No. Pendaftaran:</label>
    <input type="text" id="no-pendaftaran" name="no-pendaftaran"><br><br>
    <label for="no-telefon-bimb">No. Telefon Bimbit:</label>
    <input type="tel" id="no-telefon-bimb" name="no-telefon-bimb"><br><br>
    <label for="program">Program:</label>
    <input type="text" id="program" name="program"><br><br>
    <label for="jabatan">Jabatan:</label>
    <input type="text" id="jabatan" name="jabatan"><br><br>
  </section>

  <section>
    <h3>B) Kelayakan</h3>
    <label for="himpunan-nilai-mata">Himpunan Nilai Mata (HPNM) Terkini:</label>
    <input type="text" id="himpunan-nilai-mata" name="himpunan-nilai-mata"><br><br>
    <label for="mengulang-semester">Pernah mengulang semester?</label>
    <input type="radio" id="mengulang-semester-ya" name="mengulang-semester" value="YA">
    <label for="mengulang-semester-ya">YA</label>
    <input type="radio" id="mengulang-semester-tidak" name="mengulang-semester" value="TIDAK">
    <label for="mengulang-semester-tidak">TIDAK</label><br><br>
    <label for="dikenakan-tindakan-tatatertib">Pernah dikenakan tindakan tatatertib?</label>
    <input type="radio" id="dikenakan-tindakan-tatatertib-ya" name="dikenakan-tindakan-tatatertib" value="YA">
    <label for="dikenakan-tindakan-tatatertib-ya">YA</label>
    <input type="radio" id="dikenakan-tindakan-tatatertib-tidak" name="dikenakan-tindakan-tatatertib" value="TIDAK">
    <label for="dikenakan-tindakan-tatatertib-tidak">TIDAK</label><br><br>
    <label for="sedang-menunggu-tindakan-tatatertib">Sedang menunggu tindakan tatatertib?</label>
    <input type="radio" id="sedang-menunggu-tindakan-tatatertib-ya" name="sedang-menunggu-tindakan-tatatertib" value="YA">
    <label for="sedang-menunggu-tindakan-tatatertib-ya">YA</label>
    <input type="radio" id="sedang-menunggu-tindakan-tatatertib-tidak" name="sedang-menunggu-tindakan-tatatertib" value="TIDAK">
    <label for="sedang-menunggu-tindakan-tatatertib-tidak">TIDAK</label><br><br>
    <label for="menjadi-exco-mpp">Pernah menjadi exco MPP sebelum ini?</label>
    <input type="radio" id="menjadi-exco-mpp-ya" name="menjadi-exco-mpp" value="YA">
    <label for="menjadi-exco-mpp-ya">YA</label>
    <input type="radio" id="menjadi-exco-mpp-tidak" name="menjadi-exco-mpp" value="TIDAK">
    <label for="menjadi-exco-mpp-tidak">TIDAK</label><br><br>
  </section>

  <section>
    <h3>C) Kelab / Persatuan Lain Yang Disertai Di Politeknik Selangor</h3>
    <label for="kelab-pertama">Nama Kelab / Persatuan :</label>
    <input type="text" id="kelab-pertama" name="kelab-pertama"><br><br>
    <label for="kelab-kedua">Jawatan Tertinggi:</label>
    <input type="text" id="kelab-kedua" name="kelab-kedua"><br><br>
  </section>

  <section>
  <h3>D) BUTIRAN PENCADANG DAN PENYOKONG</h3>
		<h2>Pencadang (Pelajar):</h2>
        <label for="pencadang_tandatangan">Tandatangan:</label>
        <input type="file" id="pencadang_tandatangan" name="pencadang_tandatangan" accept=".png, .jpg, .jpeg" required><br><br>
        <label for="pencadang_nama">Nama:</label>
        <input type="text" id="pencadang_nama" name="pencadang_nama" required><br><br>
        <label for="pencadang_no_pendaftaran">No. Pendaftaran:</label>
        <input type="text" id="pencadang_no_pendaftaran" name="pencadang_no_pendaftaran" required><br><br>
		<label for="pencadang_no_telefon">No. Telefon:</label>
        <input type="text" id="pencadang_no_telefon" name="pencadang_no_telefon" required><br><br>
		
        <h2>Penyokong (Pelajar):</h2>
        <label for="penyokong_tandatangan">Tandatangan:</label>
        <input type="file" id="penyokong_tandatangan" name="penyokong_tandatangan" accept=".png, .jpg, .jpeg" required><br><br>
        <label for="penyokong_nama">Nama:</label>
        <input type="text" id="penyokong_nama" name="penyokong_nama" required><br><br>
        <label for="penyokong_no_pendaftaran">No. Pendaftaran:</label>
        <input type="text" id="penyokong_no_pendaftaran" name="penyokong_no_pendaftaran" required><br><br>
		<label for="penyokong_no_telefon">No. Telefon:</label>
        <input type="text" id="penyokong_no_telefon" name="penyokong_no_telefon" required><br><br>
		
        <h3>E) PENGAKUAN PEMOHON</h3>
        <p>Saya sesungguhnya mengaku bahawa segala maklumat yang diberikan dalam borang ini adalah benar
        belaka.</p>
        <label for="pemohon_tandatangan">Tandatangan:</label>
        <input type="text" id="pemohon_tandatangan" name="pemohon_tandatangan" required><br><br>
        <label for="pemohon_tarikh">Tarikh:</label>
        <input type="date" id="pemohon_tarikh" name="pemohon_tarikh" required><br><br>
        
  </section>
  
</body>
</html>


  <input type="submit" value="Hantar">
</form>
</body>
</html>