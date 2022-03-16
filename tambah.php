<h1>Form Tambah Data</h1>

<form method="POST">
    NIM :<input type="text" name="nim" required><br>
    NAMA : <input type="text" name="nama"><br>
    KELAS : <input type="text" name="kelas" ><br>
    <input type="submit" value="Simpan">
</form>

<?php
if(isset($POST['nim']) and !empty($POST['nim'])) {
    include('koneksi.php');
    $sql = "insert into mahasiswa(nim, nama, kelas) values('".
      $_POST['nim'] . "','" . $_POST['nama'] . "','" . $_POST['KELAS'] . "'";
    $result = pg_affected_rows(pg_query($sql));
    echo "data tersimpan $result baris";
  if($result == 1) {
      header('Location: index.php');
  }
}
?>