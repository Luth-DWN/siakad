<?php

//panggil koneksi, menggunakan pdo supaya enak untuk mengisi query
include './conn.php';
 
if ($_POST['action'] == 'edit') {
$data = [
    ':a' => $_POST["nis"],
    ':b' => $_POST["namasiswa"],
    ':c' => $_POST["gender_siswa"],
    ':d' => $_POST["tlahirsiswa"],
    ':e' => $_POST["lahirsiswa"],
    ':f' => $_POST["alamatsiswa"],
    ':g' => $_POST["nohpsiswa"],
    ':h' => $_POST["foto"],
    ':i' => $_POST["idkelas"],
    ':j' => $_POST["asalsiswa"],
    ':k' => $_POST["ortusiswa"],
    ':l' => $_POST["portusiswa"],
    ':m' => $_POST["identifier"]
];
 
$query ="
 UPDATE msiswa
 SET nis = :a,
 nama_siswa = :b,
 jenis_kelamin = :c,
 tempat_lahir = :d,
 tgl_lahir = :e,
 alamat = :f,
 no_hp = :g,
 foto = :h,
 id_kelas = :i,
 asal_sekolah = :j,
 nama_ortu = :k,
 pekerjaan_ortu = :l
 WHERE nis = :m
 ";
    $statement = $connect->prepare($query);
    $statement->execute($data);
    echo json_encode($_POST);
}

if ($_POST['action'] == 'delete') {
    $query ="
 DELETE FROM msiswa 
 WHERE nis = '" . $_POST["identifier"]. "'
 ";
    $statement = $connect->prepare($query);
    $statement->execute();
    echo json_encode($_POST);
}
 
?>