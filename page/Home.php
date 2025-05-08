<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT FALSAH IZORA</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css"  href="css/tentang.css">
</head>
<body>
    <section class="img-header1">
        <div class="header-overlay">
        <h1>CARI MESIN FOTOCOPY?</h1>
        </div>
    </section>
    <div class="container">
        <br><br><br>
        <h1 class="judul-conta">Daftar Mesin Fotocopy</h1>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "listmesin";
            
           
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            
            
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "SELECT id_mesin, gambar_mesin, nama_mesin, harga_mesin FROM daftarmesin";
            $result = $conn->query($sql);

            if (!empty($result) && $result->num_rows > 0) {
                echo '<div class="product-list2">'; 
                while($row = $result->fetch_assoc()) {
                    echo '
                    <div class="product">
                        <img src="'.$row["gambar_mesin"].'" alt="'.$row["nama_mesin"].'">
                        <h3>'.$row["nama_mesin"].'</h3>
                        <p class="text-danger">'.$row["harga_mesin"].'</p>
                    </div>';
                }
                echo '</div>'; 
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    </div>
    <br><br>
    <hr class="hr-style">
    <br>
    <div class="container">
        <br><br><br>
        <h1 class="judul-conta">Mesin Fotocopy Hitam Putih</h1>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "listmesin";
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            
            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "SELECT id_mesin, gambar_mesin, nama_mesin, harga_mesin FROM daftarmesin WHERE kategori_mesin='hitamputih'";
            $result = $conn->query($sql);

            if (!empty($result) && $result->num_rows > 0) {
                echo '<div class="product-list2">'; // Ditaruh di luar while
                while($row = $result->fetch_assoc()) {
                    echo '
                    <div class="product">
                        <img src="'.$row["gambar_mesin"].'" alt="'.$row["nama_mesin"].'">
                        <h3>'.$row["nama_mesin"].'</h3>
                        <p class="text-danger">'.$row["harga_mesin"].'</p>
                    </div>';
                }
                echo '</div>'; // Tutup div setelah loop
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    </div>
    <br><br>
    <hr class="hr-style">
    <div class="container">
        <br><br><br>
        <h1 class="judul-conta">Mesin Fotocopy Berwarna</h1>
        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "listmesin";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id_mesin, gambar_mesin, nama_mesin, harga_mesin FROM daftarmesin WHERE kategori_mesin='berwarna'";
    $result = $conn->query($sql);

    if (!empty($result) && $result->num_rows > 0) {
        echo '<div class="product-list2">'; // Ditaruh di luar while
        while($row = $result->fetch_assoc()) {
            echo '
            <div class="product">
                <img src="'.$row["gambar_mesin"].'" alt="'.$row["nama_mesin"].'">
                <h3>'.$row["nama_mesin"].'</h3>
                <p class="text-danger">'.$row["harga_mesin"].'</p>
            </div>';
        }
        echo '</div>'; // Tutup div setelah loop
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

        </div>
        <br><br>
        <hr class="hr-style">
        <br>
        
    <div class="container">
        <h1 class="judul-conta">Tentang Mesin Fotocopy</h1>
        <div class="gm1">
        <img class= "box1" src="gambar/423.jpg">
        <div class="text12">
            <p>Mesin fotokopi atau mesin salin sinar merupakan sebuah alat teknologi yang berfungsi untuk membuat salinan ke atas kertas dari dokumen, buku, maupun sumber lain. Mesin fotokopi pertama kali ditemukan oleh ahli fisikawan asal Amerika Chester Carlson pada tahun 1939.</p>
        </div>
        </div>
    </div>
    <br>
    <br>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
  $("#resultBox").hide(); // Sembunyikan saat awal

  $("#searchBox").on("input", function () {
    let keyword = $(this).val().trim();

    if (keyword === "") {
      $("#resultBox").hide(); // Sembunyikan hasil
      return;
    }

    $.ajax({
      url: "../db.php",
      method: "GET",
      data: { keyword: keyword },
      success: function (response) {
        $("#resultBox").html(response).show(); // Tampilkan hasil
      }
    });
  });
});
</script>


</body>

</html>