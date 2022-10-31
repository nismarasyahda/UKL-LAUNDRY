<?php


    if($_POST){
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];

        
        
        if(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='ubah_user.php';</script>";
            
        } else {
            include "koneksi.php";
            
            $update=mysqli_query($conn,"update user set nama='".$nama."', username='".$username."', password='".$password."', role='".$role."' where id = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id=".$id."';</script>";
            }
        } 
    }
?>