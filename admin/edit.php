<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST['id_mesin']) ? intval($_POST['id_mesin']) : 0;
    $gambar = mysqli_real_escape_string($conn, $_POST['gambar_mesin']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama_mesin']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga_mesin']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori_mesin']);

    if ($id <= 0) {
        echo "ID tidak valid";
        exit;
    }

    $query = "UPDATE daftarmesin SET 
                gambar_mesin='$gambar',
                nama_mesin='$nama',
                harga_mesin='$harga',
                kategori_mesin='$kategori'
              WHERE id_mesin=$id";

    if ($conn->query($query)) {
        echo "success";
    } else {
        echo "Gagal update: " . $conn->error;
    }
}
?>

