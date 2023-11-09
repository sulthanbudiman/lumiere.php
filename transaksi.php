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
    include "koneksidatabase.php";
    $qry_film = mysqli_query($conn, "select * from film where id_film = 1");
    $dt_film = mysqli_fetch_array($qry_film);
    if (isset($_GET['id_seat'])) {
        $seatmu = $_GET['id_seat'];
    } else {
        echo 'eror';
    }
    ?>
    <h2></h2>
    <div class="row">
        <div class="col-md-4">
            
        </div>
        <div class="col-md-8">
            <!-- <form action="masukkankeranjang.php?id_buku=<?= $dt_film['id_buku'] ?>"> -->
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
    ?>

<div class="container overflow-hidden">
      <div class="row gx-5">
        <div class="col">
          <div class="container">
            <div class="card" id="card">
              <div class="p-3">
              <img src="../assets/poster_film/<?= $dt_film['poster'] ?>" class="card-img-top">
                <div class="card-header p-3">
                  <h4><?= $dt_film['judul'] ?></h4>
                </div>
                
                <div class="card-body">
                  <div class="form-floating mb-3">
                    <input
                      type="number"
                      class="form-control"
                      id="sisiluas"
                      placeholder="Masukkan angka "
                    />
                    <label for="sisiluas">Sisi</label>
                  </div>
                  <!-- Keluarnya hasil -->
                  <div class="input-group mb-3">
                    <span class="input-group-text">Hasil</span>
                    <div class="form">
                      <input
                        type="number"
                        class="form-control"
                        id="hasilluas"
                        placeholder="Hasil"
                        disabled
                      />
                    </div>
                  </div>
                  <!-- tomobol untuk menghitung -->
                  <!--? dikasih tombol reset gk enaknya?-->
                  <section id="body">
                    <button type="button" onclick="hitungluas()" id="container">
                      <div class="bottom"></div>
                      <div class="cover cut"></div>
                      <div id="text-container">
                        <div class="text">Hitung</div>
                      </div>
                      <div class="text-container cut">
                        <div class="text text-dark">Hasil</div>
                      </div>
                      <div class="overlay"></div>
                    </button>
                  </section>
                </div>
              </div>
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