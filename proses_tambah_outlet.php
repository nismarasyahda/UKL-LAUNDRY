<?php
    if($_POST){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $tlp=$_POST['tlp'];
        
        if(empty($nama)){
            echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into outlet (nama, alamat, tlp) value ('".$nama."','".$alamat."','".$tlp."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan outlet');location.href='outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
            }
        }
    }
?>