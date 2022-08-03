<?php 
if(isset($_POST['simpansiswa'])){
     // upload foto
     $ekstensi_diperbolehkan = array('png','jpg','jpeg');
     $nama = $_FILES['foto']['name'];
     $x = explode('.', $nama);
     $ekstensi = strtolower(end($x));
     $ukuran	= $_FILES['foto']['size'];
     $file_tmp = $_FILES['foto']['tmp_name'];	

     if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
         if($ukuran < 1044070){			
             move_uploaded_file($file_tmp, 'upload/'.$nama);
         }else{
             echo 'UKURAN FILE TERLALU BESAR';
         }
     }else{
         echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
     }


    $data = [
        $_POST['nis'],
        $_POST['namasiswa'],
        $_POST['gender_siswa'],
        $_POST['tlahirsiswa'],
        $_POST['lahirsiswa'],
        $_POST['alamatsiswa'],
        $_POST['nohpsiswa'],
        $nama,
        $_POST['idkelas'],
        $_POST['asalsiswa'],
        $_POST['ortusiswa'],
        $_POST['portusiswa']
    ];

    $result = mysqli_query($koneksi,"INSERT INTO msiswa(nis,nama_siswa,jenis_kelamin,tempat_lahir,tgl_lahir,alamat,no_hp,foto,id_kelas,asal_sekolah,nama_ortu,pekerjaan_ortu)
              VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]')");

}
?>