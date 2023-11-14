<?php
include "koneksidatabase.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="styletempatduduk.css" />
</head>

<body>
  <script>
    //   function ubahWarna() {
    //         const tombol = document.getElementById("klik");
    //         tombol.style.backgroundColor = "red";
    //     }


    function ubahWarna(a1) {
      const elemen = document.getElementById(a1);

      if (elemen.classList.contains('btn-success')) {
        elemen.classList.remove('btn-success');
        elemen.classList.add('btn-danger');
        kirimStatusTempatDuduk(this.event, "terisi")
      } else {
        elemen.classList.remove('btn-danger');
        kirimStatusTempatDuduk(this.event, "kosong")

        elemen.classList.add('btn-success');
      }
    }


    // function ubahWarna(klik) {
    //         const elemen = document.getElementById(klik);
    //         if (elemen.style.backgroundColor === "red") {
    //             elemen.style.backgroundColor = ""; // Menghapus latar belakang yang telah diubah
    //         } else {
    //             elemen.style.backgroundColor = "red";
    //         }
    //     }
  </script>
  <?php
  session_start();
  if ($_GET['id_film']) {
    $filem = $_GET['id_film'];
  } else {
      echo 'eror';
  }
  $_SESSION['filme'] = $filem;
  ?>

  <div class="card text-bg-dark text-center" id="screen">SCREEN</div>

  <div class="container text-center" id="jarak">
    <div class="row g-3">

      <div class="col">

        <div class="p-3 btn" id="a1" onclick="ubahWarna('a1')"><?= $_SESSION['filme'] ?></div>
      </div>
      <div class="col ">
        <div class="p-3 btn" id="a2" onclick="ubahWarna('a2')">A2</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="a3" onclick="ubahWarna('a3')">A3</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="a4" onclick="ubahWarna('a4')">A4</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="a5" onclick="ubahWarna('a5')">A5</div>
      </div>
      <div class="col">
        <div class="p-3">A</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="a6" onclick="ubahWarna('a6')">A6</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="a7" onclick="ubahWarna('a7')">A7</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="a8" onclick="ubahWarna('a8')">A8</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="a9" onclick="ubahWarna('a9')">A9</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="a10" onclick="ubahWarna('a10')">A10</div>
      </div>
    </div>
    <div id="baris" class="row g-3">
      <div class="col ">
        <div class="p-3 btn" id="b1" onclick="ubahWarna('b1')">B1</div>
      </div>
      <div class="col ">
        <div class="p-3 btn" id="b2" onclick="ubahWarna('b2')">B2</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="b3" onclick="ubahWarna('b3')">B3</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="b4" onclick="ubahWarna('b4')">B4</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="b5" onclick="ubahWarna('b5')">B5</div>
      </div>
      <div class="col">
        <div class="p-3">B</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="b6" onclick="ubahWarna('b6')">B6</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="b7" onclick="ubahWarna('b7')">B7</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="b8" onclick="ubahWarna('b8')">B8</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="b9" onclick="ubahWarna('b9')">B9</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="b10" onclick="ubahWarna('b10')">B10</div>
      </div>
    </div>
    <div id="baris" class="row g-3">
      <div class="col ">
        <div class="p-3 btn" id="c1" onclick="ubahWarna('c1')">C1</div>
      </div>
      <div class="col ">
        <div class="p-3 btn" id="c2" onclick="ubahWarna('c2')">C2</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="c3" onclick="ubahWarna('c3')">C3</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="c4" onclick="ubahWarna('c4')">C4</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="c5" onclick="ubahWarna('c5')">C5</div>
      </div>
      <div class="col">
        <div class="p-3">C</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="c6" onclick="ubahWarna('c6')">C6</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="c7" onclick="ubahWarna('c7')">C7</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="c8" onclick="ubahWarna('c8')">C8</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="c9" onclick="ubahWarna('c9')">C9</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="c10" onclick="ubahWarna('c10')">C10</div>
      </div>
    </div>
    <div id="baris" class="row g-3">
      <div class="col ">
        <div class="p-3 btn" id="d1" onclick="ubahWarna('d1')">D1</div>
      </div>
      <div class="col ">
        <div class="p-3 btn" id="d2" onclick="ubahWarna('d2')">D2</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="d3" onclick="ubahWarna('d3')">D3</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="d4" onclick="ubahWarna('d4')">D4</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="d5" onclick="ubahWarna('d5')">D5</div>
      </div>
      <div class="col">
        <div class="p-3">D</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="d6" onclick="ubahWarna('d6')">D6</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="d7" onclick="ubahWarna('d7')">D7</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="d8" onclick="ubahWarna('d8')">D8</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="d9" onclick="ubahWarna('d9')">D9</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="d10" onclick="ubahWarna('d10')">D10</div>
      </div>
    </div>
    <div id="baris" class="row g-3">
      <div class="col ">
        <div class="p-3 btn" id="e1" onclick="ubahWarna('e1')">E1</div>
      </div>
      <div class="col ">
        <div class="p-3 btn" id="e2" onclick="ubahWarna('e2')">E2</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="e3" onclick="ubahWarna('e3')">E3</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="e4" onclick="ubahWarna('e4')">E4</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="e5" onclick="ubahWarna('e5')">E5</div>
      </div>
      <div class="col">
        <div class="p-3">E</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="e6" onclick="ubahWarna('e6')">E6</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="e7" onclick="ubahWarna('e7')">E7</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="e8" onclick="ubahWarna('e8')">E8</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="e9" onclick="ubahWarna('e9')">E9</div>
      </div>
      <div class="col">
        <div class="p-3 btn" id="e10" onclick="ubahWarna('e10')">E10</div>
      </div>

    </div>
  </div>

  <a href="crud_film.php" class="btn btn-primary btn-lg" role="button" id="tombolkembali">Kembali</a>
  <?php
  $get_duduk = mysqli_query($conn, "SELECT * FROM seat WHERE status = 'terisi'");
  if (mysqli_num_rows($get_duduk) == 0) {
    echo '<a class="btn btn-danger btn-lg" role="button">Pilih Tempat Duduk woi</a>';
  } else {
    $dt_duduk = mysqli_fetch_array($get_duduk);
    echo '<a href="transaksi.php?id_seat=' . $dt_duduk['no_seat'] . '" class="btn btn-warning btn-lg" role="button" id="tombolkirim">Kirim</a>';
  }
  ?>
  <script>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM seat");
    while ($row = mysqli_fetch_array($result)) {
    ?>
      var test<?= $row["no_seat"] ?> = document.querySelector("#<?= $row["no_seat"] ?>");
      if ("<?= $row["status"] ?>" == "terisi") test<?= $row["no_seat"] ?>.classList.add('btn-danger');
      else test<?= $row["no_seat"] ?>.classList.add('btn-success');
    <?php
    }
    ?>


    document.getElementById("tombolkirim").addEventListener("click", function() {
      kirimStatusTempatDuduk();
    });

    function kirimStatusTempatDuduk(event, status) {
      var target = event.target || event.srcElement;
      var tempatDudukID = target.id; // Ambil ID tempat duduk
      const selectedTempatDuduk = document.querySelector(`#${tempatDudukID}.btn-danger`); // Temukan tempat duduk yang dipilih (yang memiliki class 'btn-danger')
      console.log(tempatDudukID)
      const xhr = new XMLHttpRequest();
      xhr.open("POST", "prosesseat.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          alert(xhr.responseText); // Tampilkan pesan dari server
        }
      };
      xhr.send("no_seat=" + tempatDudukID + "&" + "status=" + status);
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>

</body>

</html>