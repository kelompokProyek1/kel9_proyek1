<?php
// Include koneksi database
include 'koneksi.php';

// Cek apakah form dikirim (untuk menambahkan admin)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Username dan password untuk admin pertama
    $username = 'admin';
    $password = password_hash('admin123', PASSWORD_DEFAULT); // Menggunakan hashing untuk password

    // Query untuk memasukkan data ke dalam tabel admin
    $query = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
    
    if (mysqli_query($conn, $query)) {
        echo "Admin berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan admin: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tambah Admin</title>
</head>
<body>
  <h2>Tambah Admin Pertama</h2>
  <form method="POST" action="add_admin.php">
    <button type="submit">Tambah Admin</button>
  </form>
</body>
</html>
