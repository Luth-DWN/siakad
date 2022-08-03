<?php

//panggil koneksi, menggunakan pdo supaya enak untuk mengisi query
include './conn.php';
 
if ($_POST['action'] == 'edit') {
$data = [
    ':a' => $_POST["idguru"],
    ':b' => $_POST["nipguru"],
    ':c' => $_POST["namaguru"],
    ':d' => $_POST["tlahirguru"],
    ':e' => $_POST["lahirguru"],
    ':f' => $_POST["alamatguru"],
    ':g' => $_POST["ktpguru"],
    ':h' => $_POST["statusguru"],
    ':i' => $_POST["jabatanguru"],
    ':j' => $_POST["foto"],
    ':k' => $_POST["statuspegawai"],
    ':l' => $_POST["identifier"]
];
 
$query = "
 UPDATE mguru
 SET id_guru = :a,
 nip = :b,
 nama_guru = :c,
 tempat_lahir = :d,
 tgl_lahir = :e,
 alamat = :f,
 no_ktp = :g,
 status_keluarga = :h,
 id_jabatan = :i,
 foto = :j,
 status_pegawai = :k
 WHERE id_guru = :l
 ";
    $statement = $connect->prepare($query);
    $statement->execute($data);
    echo json_encode($_POST);
}
 
if ($_POST['action'] == 'delete') {
    $query ="
 DELETE FROM mguru 
 WHERE id_guru = '" . $_POST["identifier"]. "'
 ";
    $statement = $connect->prepare($query);
    $statement->execute();
    echo json_encode($_POST);
}
 
?>