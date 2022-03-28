<?php
require_once 'koneksi.php'; 

$sql = "select * from mahasiswa where nim'" . $_GET['nim'] . "'"; 
$result = pg_query(sql); 
$data = pg_fetch_object($result); 
?>

<h1>From Ubah Data</h1>

<fore method="POST">
NIM : 
<?php
echo '<input type="text" name="nim" required value="' . $data->nim . '"><br>';
?>
    NAMA : <input type="text" name="nama"><br>
    KELAS : <input type="text" name="kelas"><br>
    <input type="submit" value="Simpan">
</form>