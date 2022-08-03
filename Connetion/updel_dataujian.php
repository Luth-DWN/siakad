<?php 
include './conn.php';

if ($_POST['action'] == 'edit') {
    $data = [
        ':a' => $_POST["namasiswa"],
        ':b' => $_POST["nis"],
        ':c' => $_POST["idmapel"],
        ':d' => $_POST["namamapel"],
        ':e' => $_POST["nilai"],
        ':f' => $_POST["identifier"]
    ];

    $query = "
    UPDATE tdata_ujian
    SET nama_siswa = :a,
    nis = :b,
    id_matpel = :c,
    nama_matpel = :d,
    nilai_ujian = :e
    WHERE nis = :f
    ";
    $statement = $connect->prepare($query);
    $statement->execute($data);
    echo json_encode($_POST);
}

if ($_POST['action'] == 'delete') {
    $query ="
DELETE FROM tdata_ujian WHERE id = '" .$_POST["id"]. "'
 ";
    $statement = $connect->prepare($query);
    $statement->execute();
    echo json_encode($_POST);
}
?>