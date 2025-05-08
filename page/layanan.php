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

    <section class="img-header3">
        <div class="header-overlay">
        <h1>Layanan Penyewaan
            Mesin Fotocopy</h1>
        </div>
    </section>
    <br><br>
    <img class= "box2" src="gambar/logo.png">
    <br><br>
    <div class="prgf1">
    <p>Kami di PT Falsah izora dijital menyediakan berbagai layanan penyewaan mesin fotokopi yang dapat disesuaikan dengan kebutuhan bisnis Anda. Dengan mesin berkualitas tinggi dan dukungan teknis profesional, kami siap membantu meningkatkan efisiensi dan produktivitas usaha Anda.</p>
    </div>
    <br>
    <div class="prgf1">
    <p>1. Sewa Mesin Fotokopi Harian, Bulanan, & Tahunan</p>
    </div>
    <div class="prgf1">
        <p>Kami menawarkan pilihan penyewaan dengan waktu dingin:</p>
    </div>
    <div class="prgf3">
    <list class="list">
        Sewa Harian - Cocok untuk acara atau kebutuhan sementara.
    </list>
    </div>
    <div class="prgf3">
        <list class="list">
        Sewa Bulanan - Pilihan ideal untuk bisnis dengan kebutuhan jangka pendek.
        </list>
        </div>
    <div class="prgf3">
        <list class="list">
        Sewa Tahunan - Hemat biaya untuk perusahaan yang membutuhkan mesin dalam jangka panjang.
        </list>
        </div>
        <br><br>
        <div class="prgf1">
        <p>2. Penyewaan Mesin Fotokopi Hitam Putih & Warna</p>
        </div>
        <div class="prgf1">
            <p>Kami menyediakan mesin fotokopi dengan dua kategori utama:</p>
        </div>
        <div class="prgf3">
        <list class="list">
            Mesin Fotokopi Hitam Putih - Hemat biaya dan cocok untuk kebutuhan cetak dokumen standar.
        </list>
        </div>
        <div class="prgf3">
            <list class="list">
            Mesin Fotokopi Warna - Kualitas cetak yang tajam untuk kebutuhan presentasi, brosur, dan dokumen penting lainnya.
            </list>
            </div>
        <br><br>
        <div class="prgf1">
        <p>3. Paket Penyewaan Sesuai Kebutuhan</p>
        </div>
        <div class="prgf1">
            <p>Kami memahami bahwa setiap bisnis memiliki kebutuhan yang berbeda. Oleh karena itu, kami menyediakan paket penyewaan yang dapat disesuaikan berdasarkan:</p>
        </div>
        <div class="prgf3">
        <list class="list">
            Volume cetak per bulan
        </list>
        </div>
        <div class="prgf3">
            <list class="list">
            Jenis mesin dan fitur yang dibutuhkan
            </list>
            </div>
        <div class="prgf3">
            <list class="list">
            Anggaran perusahaan
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