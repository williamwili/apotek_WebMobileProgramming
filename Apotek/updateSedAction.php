<?php
// Koneksi database
include('connection.php');

if (isset($_POST['update'])) { // Mengganti 'insert' menjadi 'update'
    // Menangkap data yang dikirim dari form
    $kd = $_POST['kode'];
    $nm = $_POST['nama'];
    $sql = "UPDATE sediaan SET nama='$nm' WHERE kode='$kd'"; // Mengganti perintah SQL menjadi UPDATE
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: selectSediaan.php");
    } else {
        echo "Query Error: " . mysqli_error($con);
    }
} else {
    echo "<b>Anda harus mengakses dari <a href='updateSediaan.php'>Form Update</a></b>";
}
?>