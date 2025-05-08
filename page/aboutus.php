<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT FALSAH IZORA</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/tentang.css">
    
</head>
<body>
<div>

<section class="img-header2">
    <div class="header-overlay">
    <h1>ABOUT US</h1>
    </div>
</section>
<br><br>
<div class="container">
    <div class="gm2">
    <img class= "box1" src="gambar/logo.png">
    <div class="text13">
        <p>Selamat datang di PT. Falsah Izora, solusi terpercaya untuk kebutuhan penyewaan mesin fotokopi! Kami adalah perusahaan yang berpengalaman dalam menyediakan layanan sewa mesin fotokopi berkualitas tinggi untuk berbagai kebutuhan bisnis, perkantoran, sekolah, dan instansi lainnya.</p>
    </div>
    </div>
</div>
<br><br>
<div class="prgf">
    <p>Didirikan pada tahun 2001, kami telah melayani berbagai pelanggan dengan komitmen untuk memberikan layanan terbaik dan produk berkualitas. Dengan tim profesional dan dukungan teknis yang handal, kami memastikan setiap mesin fotokopi yang kami sewakan dalam kondisi optimal dan siap mendukung produktivitas bisnis Anda.</p>
</div>
<br><br><br><br>
<h2 class="rata"><b>MENGAPA MEMILIH KAMI?</b></h2>
<br>
<div class="prgf">
<list class="list">
Mesin Fotokopi Berkualitas  Kami menyediakan berbagai jenis mesin fotokopi dan seri-seri ternama yang dapat disesuaikan dengan kebutuhan Anda.
</list>
<list class="list">
Harga Kompetitif  Layanan penyewaan kami menawarkan harga yang bersaing dengan pembayaran terkecil.
</list>
<list class="list">Perawatan & Dukungan Teknis Kami memberikan layanan perawatan rutin dan dukungan teknis jika terjadi kendala, tanpa biaya tambahan.
</list>
<list class="list">Fleksibilitas Sewa Kami menawarkan paket sewa harian, bulanan, hingga tahunan sesuai kebutuhan bisnis Anda.
</list>
<list class="list">Layanan Cepat & Responsif Tim kami siap membantu Anda kapan saja dengan layanan pelanggan yang cepat dan ramah.
</list>
</div>
<script>
$(document).ready(function() {
  $("#resultBox").hide();
  
  $("#searchBox").on("input", function() {
    let keyword = $(this).val().trim();
    
    if (keyword === "") {
      $("#resultBox").hide();
      return;
    }

    $.ajax({
      url: "../db.php", // Sesuaikan path jika perlu
      method: "GET",
      data: { keyword: keyword },
      success: function(response) {
        $("#resultBox").html(response).show();
      },
      error: function(xhr, status, error) {
        console.error("Error:", error);
      }
    });
  });
});
</script>
</body>
</html>