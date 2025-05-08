<?php 
include "layout/header.php"; // Header akan selalu terpanggil

$page = isset($_GET['halaman']) ? $_GET['halaman'] : 'Home';
switch ($page) {
    case 'Home':
        include "page/Home.php";
        break;
    case 'aboutus':
        include "page/aboutus.php";
        break;    
    case 'kontak':
        include "page/kontak.php";
        break;
    case 'layanan':
        include "page/layanan.php";
        break;
    default:
        // Jika parameter tidak cocok, tampilkan halaman 404 atau home
        include "page/Home.php";
        break;
}

require "layout/footer.php"; // Footer akan selalu terpanggil
?>