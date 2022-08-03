<?php 
if(isset($_POST['simpanmapel'])){

    $data = [
        $_POST['kodemapel'],
        $_POST['namamapel'],
        $_POST['statusmapel']
    ];

    $result = mysqli_query($koneksi,"INSERT INTO mmatpel(id_matpel,nama_matpel,status_pelajaran) 
                VALUES('$data[0]','$data[1]','$data[2]')");

}
?>
