<?php 
    include './conn.php';
    
    if ($_POST['action'] == 'edit') {
        $data = [
            ':a' => $_POST["kodekelas"],
            ':b' => $_POST["namakelas"],
            ':c' => $_POST["idguru"],
            ':d' => $_POST["niskelas"],
            ':e' => $_POST["tahunajaran"],
            ':f' => $_POST["identifier"]
        ];
    
        $query = "
        UPDATE mkelas
        SET id_kelas = :a,
        nama_kelas = :b,
        id_guru = :c,
        nis = :d,
        id_tahun_ajaran = :e
        WHERE id_kelas = :f
        ";
        $statement = $connect->prepare($query);
        $statement->execute($data);
        echo json_encode($_POST);
    }
    
    if ($_POST['action'] == 'delete') {
        $query ="
    DELETE FROM mkelas WHERE id_kelas = '" .$_POST["identifier"]. "'
     ";
        $statement = $connect->prepare($query);
        $statement->execute();
        echo json_encode($_POST);
    }
?>