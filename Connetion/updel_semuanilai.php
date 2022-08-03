<?php

//panggil koneksi, menggunakan pdo supaya enak untuk mengisi query
include './conn.php';
 
if ($_POST['action'] == 'edit') {
$data = [
    ':a' => $_POST["id_nilai_siswa"],
    ':b' => $_POST["nis"],
    ':c' => $_POST["idmatpel"],
    ':d' => $_POST["idkelas"],
    ':e' => $_POST["idguru"],
    ':f' => $_POST["tajar"],
    ':g' => $_POST["semester"],
    ':h' => $_POST["nharian1"],
    ':i' => $_POST["nharian2"],
    ':j' => $_POST["nharian3"],
    ':k' => $_POST["ntugas1"],
    ':l' => $_POST["ntugas2"],
    ':m' => $_POST["nuts"],
    ':n' => $_POST["nuas"],
    ':o' => $_POST["identifier"]
];
 
$query ="
 UPDATE tnilai_siswa
 SET id_nilai_siswa = :a,
 nis = :b,
 id_matpel = :c,
 id_kelas = :d,
 id_guru = :e,
 id_tahun_ajaran = :f,
 id_semester = :g,
 nilai_harian1 = :h,
 nilaiharian2 = :i,
 nilaiharian3 = :j,
 nilai_tugas1 = :k,
 nilai_tugas2 = :l,
 nilai_uts = :m,
 nilai_uas = :n
 WHERE id_nilai_siswa = :o
 ";
    $statement = $connect->prepare($query);
    $statement->execute($data);
    echo json_encode($_POST);
}

if ($_POST['action'] == 'delete') {
    $query ="
 DELETE FROM tnilai_siswa 
 WHERE id_nilai_siswa = '" . $_POST["identifier"]. "'
 ";
    $statement = $connect->prepare($query);
    $statement->execute();
    echo json_encode($_POST);
}

?>