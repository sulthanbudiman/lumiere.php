<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_POST) {
    // Pastikan permintaan datang dengan metode POST
    include "koneksidatabase.php"; // Sambungkan ke database

    // Ambil data yang dikirimkan dari halaman HTML
    $tempat_duduk = $_POST["no_seat"];
    $status = $_POST["status"];
    
    // Perbarui status tempat duduk di database menjadi 'terisi'
    $sql = "update seat set status = '$status' WHERE no_seat = '$tempat_duduk'";
    
    if (mysqli_query($conn, $sql)) {
        // echo "SUKSES ";
        echo "<script>alert('Username dan Password tidak benar');location.href='transaksi.php';</script>";
         
    } else {
        echo "GAGAL ";
    }
}
?>
</body>
</html>

