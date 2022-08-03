
<?php
$koneksi = mysqli_connect("localhost","root","","siakad");
// $koneksi = mysqli_connect("localhost", "root", "", "nilai");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
