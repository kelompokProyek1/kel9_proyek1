<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT FALSAH IZORA</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/tentang.css">
</head>

    <section class="img-header">
        <div class="header-overlay">
        <h1>CONTACT US</h1>
        </div>
    </section>
    <br><br><br><br>
    <section class="kontak-form-section">
        <h2>Reach Out To Us!</h2>
        <p>Mengalami kesusahan/masalah saat pembayaran? Apakah anda tertarik bermitra dengan kami? 
            Punya saran atau sekedar ingin menyapa? Hubungi kami:
        </p>
        <div class="form-container">
            <form class="kontak-form">
                <input type="text" placeholder="Nama Anda" required>
                <input type="text" placeholder="Nama Perusahaan">
                <input type="email" placeholder="Email Anda" required>
                <input type="tel" placeholder="Nomer Telepon">
                <textarea placeholder="Pesan Anda....." rows="5"></textarea>
                <button type="submit">SUBMIT</button>
            </form>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.388920323707!2d108.3341689!3d-6.3436515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebf5294bf3ed1%3A0x88f8ceda9393f020!2sSewa%20Mesin%20Fotocopy%20Dan%20Penjualan%20Begaransi!5e0!3m2!1sid!2sid!4v1744034773318!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- Tambahkan sebelum </body> -->
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