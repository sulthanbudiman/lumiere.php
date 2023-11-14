<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>

<body>
    <?php
    session_start(); 
    include "koneksidatabase.php";
    $qry_film = mysqli_query($conn, "select * from film where id_film=".$_SESSION['filme']);
    $dt_film = mysqli_fetch_array($qry_film);
    if (isset($_GET['id_seat'])) {
        $seatmu = $_GET['id_seat'];
    } else {
        echo 'eror';
    }

    

?>

<div class=" container card">
<h2><?= $dt_film['judul'] ?></h2>
<div class="row">
  <div class="col-md-4">
      <img src="../assets/poster_film/<?= $dt_film['poster'] ?>" class="card-img-top">
  </div>
  <div class="col-md-8">
      <table class="table table-hover table-striped">
          <thead>
              <tr>
                  <td>Nama Film</td>
                  <td><?= $dt_film['judul'] ?></td>
              </tr>
              <tr>
                  <td>Deskripsi</td>
                  <td><?= $dt_film['deskripsi'] ?></td>
              </tr>
              <tr>
                  <td>Tempat Duduk</td>
                  <td><?= $seatmu ?></td>
              </tr>
              <tr>
                  <td>Harga</td>
                  <td>Rp. <?= $dt_film['harga'] ?></td>
              </tr>
          </thead>
      </table>
  </div>
</div>
</div>

        <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
</body>

</html>