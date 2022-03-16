<?php
$conn_str = "host=arjuna.db.elephantsql.com " . 
    "port=5432 " . 
    "user=yyegczjh " . 
    "dbname=yyegczjh " . 
    "password=0QRqCaI1jBEIxknUbYZVDgbgRz77Geb1 "; 
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>KONEKSI GAGAL TERSAMBUNG</h3>"; 
}
?>