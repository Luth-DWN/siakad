<?php 
include './conn.php';

if ($_POST['action'] == 'edit') {
    $data = [
        ':a' => $_POST["kodemapel"],
        ':b' => $_POST["namamapel"],
        ':c' => $_POST["statusmapel"],
        ':d' => $_POST["identifier"]
    ];

    $query = "
    UPDATE mmatpel
    SET id_matpel = :a,
    nama_matpel = :b,
    status_pelajaran = :c
    WHERE id_matpel = :d
    ";
    $statement = $connect->prepare($query);
    $statement->execute($data);
    echo json_encode($_POST);
}

if ($_POST['action'] == 'delete') {
    $query ="
DELETE FROM mmatpel WHERE id_matpel = '" .$_POST["identifier"]. "'
 ";
    $statement = $connect->prepare($query);
    $statement->execute();
    echo json_encode($_POST);
}
?>