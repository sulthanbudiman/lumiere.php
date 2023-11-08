<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
<?php 
    include "koneksidatabase.php";
    $qry_film=mysqli_query($conn,"select * from film where id_film = '".$_GET['id_film']."'");
    $dt_film=mysqli_fetch_array($qry_film);
?>
<h2><?=$dt_film['judul']?></h2>
<div class="row">
    <div class="col-md-4">
        <img src="../assets/poster_film/<?=$dt_film['poster']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_buku=<?=$dt_film['id_buku']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Film</td>
                        <td><?=$dt_film['judul']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><?=$dt_film['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pinjam</td>
                        <td><input type="number" name="jumlah_pinjam" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="PINJAM"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
</body>
</html>