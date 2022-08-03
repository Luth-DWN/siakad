<?php 
if(isset($_POST['simpankelas'])){

    $data = [
        $_POST['kodekelas'],
        $_POST['namakelas'],
        $_POST['idguru'],
        $_POST['niskelas'],
        $_POST['tahunajaran']
    ];

    $result = mysqli_query($koneksi,"INSERT INTO mkelas(id_kelas,nama_kelas,id_guru,nis,id_tahun_ajaran)
              VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')");

}
?>