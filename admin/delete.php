<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM daftarmesin WHERE id_mesin = $id");
header("Location: index.php");
?>