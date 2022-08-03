<?php 
if(isset($_POST['simpannilai'])){

    $data = [
        $_POST['nis'],
        $_POST['idmatpel'],
        $_POST['idkelas'],
        $_POST['idguru'],
        $_POST['tajar'],
        $_POST['semester'],
        $_POST['nharian1'],
        $_POST['nharian2'],
        $_POST['nharian3'],
        $_POST['ntugas1'],
        $_POST['ntugas2'],
        $_POST['nuts'],
        $_POST['nuas']
    ];

    $result = mysqli_query($koneksi,"INSERT INTO tnilai_siswa(nis,id_matpel,id_kelas,id_guru,id_tahun_ajaran,id_semester,nilai_harian1,nilaiharian2,nilaiharian3,nilai_tugas1,nilai_tugas2,nilai_uts,nilai_uas)
                VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]')");
}
?>
