<?php 
$dsn = 'mysql:dbname=Sekolah_SoniDwiMulyanto_UASGenap;host=localhost';
$user = 'root'; //user mysql kamu
$password = ''; //isi dengan password mysql kamu
 
try {
    $connect = new PDO($dsn, $user, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Koneksi Bermasalah!: ' . $e->getMessage();
}
 
?>
?>