<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../Connection/Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST['nama_barang'];
    $stock = $_POST['stock'];
    $jumlah_terjual = $_POST['jumlah_terjual'];
    $tanggal = $_POST['tanggal'];
    $jenis_barang = $_POST['jenis_barang'];

    $sql = "INSERT INTO FormInput (nama_barang, stock, jumlah_terjual, tanggal, jenis_barang) VALUES ('$nama_barang', $stock, $jumlah_terjual, '$tanggal', '$jenis_barang')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the main page after successful insertion
        header("Location: ./../../../qtasnim/?success=true");
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
