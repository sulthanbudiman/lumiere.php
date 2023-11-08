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
        echo "SUKSES";
    } else {
        echo "BJIR GAGAL ";
    }
}
?>
