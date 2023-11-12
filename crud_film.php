<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- <link href="assets/img/movie.png" rel="icon">
    <link href="assets/img/movie.png" rel="apple-touch-icon"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    .button-container {
        position: relative;
        text-align: center;
    }

    .description {
        display: none;
        margin-top: 10px;
    }

    .button-container:hover .description {
        display: block;
    }

    .banner {
    background-color: #1c2938;
    /* background: -webkit-linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
    background: linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b); */
    }

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.footer{
    background: #1c2938;
    height: auto;
    width: 100vw;
    font-family: "Open Sans";
    padding-top: 40px;
    color: #fff;
}

.footer-content{
    display: flex; 
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}

.footer-content h3{
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;   
}

.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
}

.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}

.socials li{
    margin: 0 10px;
}

.socials a{
    text-decoration: none;
    color: #fff;
}

.socials a i{
    font-size: 1.1rem;
    transition: color .4s ease;
}

.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    background: #1c2938;
    width: 100vw;
    padding: 20px 0;
    text-align: center;
}

.footer-bottom p{
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}

.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
    </style>

    <script type="text/javascript">
    modal_detail = (item) => {
        document.getElementById("judul").textContent = item.judul;
        document.getElementById("genre").textContent = item.genre;
        document.getElementById("sutradara").textContent = item.sutradara;
        document.getElementById("durasi").textContent = item.durasi;
        document.getElementById("tahun_rilis").textContent = item.tahun_rilis;
        document.getElementById("harga").textContent = item.harga;
    }
    </script>

</head>

<body>
    <?php
    include "navbar.php"
?>

<?php
$_SESSION['nama'] = "John Doe"; // Isi variabel sesi dengan nilai yang sesuai
?>

    <div class="container-fluid">
        <div class="px-lg-5">
            <!-- For demo purpose -->
            <div class="row py-5">
                <div class="col-lg-12 mx-auto">
                    <div class="text-white p-5 shadow-sm rounded banner">
                        <h1 class="display-4">Selamat Datang <?=$_SESSION['nama']?> di Bioskop Lumiere.</h1>
                        <!-- <p class="lead">Bootstrap photogallery snippet.</p> -->
                        <!-- <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-reset">
                                Bootstrapious</a>, Images by <a href="https://unsplash.com"
                                class="text-reset">Unsplash</a>. -->
                        <!-- </p> -->
                    </div>
                </div>
            </div>
            <!-- End -->

            <div class="row">
                <?php 
                include "koneksidatabase.php";
                $qry_film=mysqli_query($conn,"select * from film");
                while($dt_film=mysqli_fetch_array($qry_film)){
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <img src="../assets/poster_film/<?=$dt_film['poster']?>" alt="" width="290" height="426"
                            class="img-fluid card-img-top">
                        <div class="button-container">
                            <button class="btn btn-primary" data-bs-target="#modalFilm" data-bs-toggle="modal"
                                onclick='modal_detail(<?php echo json_encode($dt_film); ?> )'
                                style="width: 323px; height: 50px;  background-color: #1c2938; border-color: #1c2938; border-radius: 0;">Detail
                                Film</button>
                            <div class="description p-4 text-left">
                                <h5> <a class="text-dark"><?=$dt_film['judul']?></a> </h5>
                                <p class="small text-muted mb-0"><?=$dt_film['deskripsi']?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <!-- End -->
        </div>
    </div>


    <div class="modal fade" id="modalFilm" aria-hidden="true" aria-labelledby="modalFilmLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalFilmLabel"><span id="judul"></span></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>Genre : <span id="genre"></span></li>
                        <li>Sutradara : <span id="sutradara"></span></li>
                        <li>Durasi : <span id="durasi"></span></li>
                        <li>Tahun Rilis : <span id="tahun_rilis"></span></li>
                        <li>Harga : Rp. <span id="harga"></span></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="seat.php"><button class="btn btn-warning" data-bs-target="#modalFilm2" data-bs-toggle="modal">Pilih Seat</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
    </script>

<!-- footer -->

    <section class="footer">
        <div class="footer-content">
            <h3>LUMIERE CINEMA</h3>
            <p>made by Alicia Mustika Setyoayu and someone who is not important idk who</p>
            <div class="social">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright Lumiere &copy;2023</p>
        </div>
    </section>

<!-- footer -->
</body>
</html>