<?php
include 'koneksi.php';
include 'header.php';

$query ="SELECT * FROM outlet";

$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);

?>

<html>
    <head>
        <title>Outlet</title>
</head>
<body>
    <h3>Data Staff</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
              
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>TLP</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_user=mysqli_query($conn,"select * from outlet");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
                $no++;
                ?>
                <tr>              
                    <td><?=$no?></td>
                    
                    <td><?=$data_user['nama']?></td> 
                    <td><?=$data_user['alamat']?></td>
                    <td><?=$data_user['tlp']?></td> 
                    <td><a href="ubah_outlet.php?id=<?=$data_user['id']?>" class="btn btn-success">Ubah</a><a style="margin-left:10px;" href="hapus_user.php?id=<?=$data_user['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td> 
                </tr>
                <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="tambah_outlet.php" class="btn btn-primary">Tambah Outletr</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>