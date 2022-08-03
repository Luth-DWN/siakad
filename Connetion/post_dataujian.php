<?php 
if(isset($_POST['simpannilai'])){

    $data = [
        $_POST['nis'],
        $_POST['namasiswa'],
        $_POST['idmapel'],
        $_POST['namamapel'],
        $_POST['nilai']
    ];

    $result = mysqli_query($koneksi,"INSERT INTO tdata_ujian(nis,nama_siswa,id_matpel,nama_matpel,nilai_ujian)
              VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')");

}
?>