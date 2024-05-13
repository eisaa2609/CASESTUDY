<!DOCTYPE html>
<head>
	<title>Borang Penamaan Calon Pilihan Raya Kampus</title>
</head>
    

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
  <table>
  <tr>
    <td>
      <h2>Pencadang (Pelajar):</h2>
      <label for="pencadang_tandatangan">Tandatangan:</label>
      <input type="file" id="pencadang_tandatangan" name="pencadang_tandatangan" accept=".png, .jpg, .jpeg" required><br><br>
      <label for="pencadang_nama">Nama:</label>
      <input type="text" id="pencadang_nama" name="pencadang_nama" required><br><br>
      <label for="pencadang_no_pendaftaran">No. Pendaftaran:</label>
      <input type="text" id="pencadang_no_pendaftaran" name="pencadang_no_pendaftaran" required><br><br>
      <label for="pencadang_no_telefon">No. Telefon:</label>
      <input type="text" id="pencadang_no_telefon" name="pencadang_no_telefon" required><br><br>
    </td>
    <td>
      <h2>Penyokong (Pelajar):</h2>
      <label for="penyokong_tandatangan">Tandatangan:</label>
      <input type="file" id="penyokong_tandatangan" name="penyokong_tandatangan" accept=".png, .jpg, .jpeg" required><br><br>
      <label for="penyokong_nama">Nama:</label>
      <input type="text" id="penyokong_nama" name="penyokong_nama" required><br><br>
      <label for="penyokong_no_pendaftaran">No. Pendaftaran:</label>
      <input type="text" id="penyokong_no_pendaftaran" name="penyokong_no_pendaftaran" required><br><br>
      <label for="penyokong_no_telefon">No. Telefon:</label>
      <input type="text" id="penyokong_no_telefon" name="penyokong_no_telefon" required><br><br>
    </td>
  </tr>
</table>
		
        <h3>E) PENGAKUAN PEMOHON</h3>
        <p>Saya sesungguhnya mengaku bahawa segala maklumat yang diberikan dalam borang ini adalah benar
        belaka.</p>
        <label for="pemohon_tandatangan">Tandatangan:</label>
        <input type="text" id="pemohon_tandatangan" name="pemohon_tandatangan" required><br><br>
        <label for="pemohon_tarikh">Tarikh:</label>
        <input type="text" id="pemohon_tarikh" name="pemohon_tarikh" required><br><br>
        
  </section>
  
</body>
</html>


  <input type="submit" value="Hantar">
</form>
</body>
</html>