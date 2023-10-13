<?php
// Koneksi database
include('connection.php');

if (isset($_POST['insert'])) {
    // Menangkap data yang dikirim dari form
    $kd = $_POST['kode'];
    $nm = $_POST['nama'];
    $sql = "INSERT INTO sediaan (kode, nama) VALUES ('$kd', '$nm')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: selectSediaan.php");
    } else {
        echo "Query Error: " . mysqli_error($con);
    }
} else {
    echo "<b>Anda harus mengakses dari <a href='insertSediaan.php'>Form Insert</a></b>";
}
?>