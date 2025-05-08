<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "listmesin";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$keyword = $_GET['keyword'] ?? '';

if ($keyword !== '') {
    $keyword = $conn->real_escape_string($keyword);
    $sql = "SELECT * FROM daftarmesin WHERE nama_mesin LIKE '%$keyword%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="search-result-container">';  // Container dengan scroll
        
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="search-result-item">
                <img src="' . htmlspecialchars($row['gambar_mesin']) . '" alt="' . htmlspecialchars($row['nama_mesin']) . '">
                <div class="search-result-info">
                    <h6>' . htmlspecialchars($row['nama_mesin']) . '</h6>
                </div>
            </div>';
        }
        
        echo '</div>';  // Tutup container
    } else {
        echo '<p class="text-muted">Mesin tidak ditemukan.</p>';
    }
}
?>