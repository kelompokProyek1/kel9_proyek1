<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT FALSAH IZORA</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css"  href="css/tentang.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="navbar_head">
        <div class="header1">
            <div class="logo">
                <img src="gambar/icon.jpeg">
            </div>
            <div class="right-section">
                <div class="pencarian">
                <input type="text" id="searchBox" class="button search-btn" placeholder="Cari mesin fotocopy...">
                <div id="resultBox" class="row mt-3"></div></div>
                <div class="iconsuser">
                <i class='bx bx-user-circle bx-tada' onclick="toogleMenu()"></i>
            </div>
            <div class="submenuhead" id="submenuheaduser">
                <div class="submenu">
                    <div class="userinfo">
                        <i class='bx bx-user-circle'></i>
                        <h3>User Name</h3>
                    </div>
                    <hr>
                    <a href="admin/login.php" class="submenulog">
                        <i class='bx bxs-help-circle'></i>
                        <p>Mode Admin</p>
                        <span>></span>
                    </a>
                    <a href="#" class="submenulog">
                        <i class='bx bxs-help-circle'></i>
                        <p>help & support</p>
                        <span>></span>
                    </a>
                    <a href="login.php" class="submenulog">
                        <i class='bx bxs-help-circle'></i>
                        <p>Login</p>
                        <span>></span>
                    </a>
                    <a href="#" class="submenulog">
                        <i class='bx bxs-help-circle'></i>
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>
            </div>
        </div>

        <div class="header2">
            <nav class="nav">
                <b>
                    <a href="index.php?halaman=Home">Home</a>
                    <a href="index.php?halaman=aboutus">About Us</a>
                    <a href="index.php?halaman=layanan">Layanan</a>
                    <a href="index.php?halaman=kontak">Kontak</a>
                    <a href="#">Laporan</a>
                </b>
            </nav>
        </div>
    </div>

    <script>
        let submenuheaduser = document.getElementById("submenuheaduser");

        function toogleMenu() {
            submenuheaduser.classList.toggle("open-menu");
        }
    </script>
</body>
</html>