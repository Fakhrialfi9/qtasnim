<?php
include '../Connection/Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM FormInput WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./../../Dashboard/Admin.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

