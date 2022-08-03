<?php 
    // ambil semua data post dari form saat menekan submit
    if(isset($_POST['simpandataguru'])){
        // upload foto
        $ekstensi_diperbolehkan	= array('png','jpg');
        $nama = $_FILES['foto']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];	

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 10440701){			
                move_uploaded_file($file_tmp, 'upload/'.$nama);
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }

        $data = [
            $_POST["idguru"],
            $_POST["nipguru"],
            $_POST["namaguru"],
            $_POST["tlahirguru"],
            $_POST["lahirguru"],
            $_POST["alamatguru"],
            $_POST["ktpguru"],
            $_POST["statusguru"],
            $_POST["jabatanguru"],
            $nama,
            $_POST["statuspegawai"],
        ];
        $result = mysqli_query($koneksi, 
        "INSERT INTO mguru(id_guru,nip,nama_guru,tempat_lahir,tgl_lahir,alamat,no_ktp,status_keluarga,id_jabatan,foto,status_pegawai)
         VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]')
        "
        );
    }
        
?>