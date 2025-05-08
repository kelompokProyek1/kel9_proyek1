<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT FALSAH IZORA</title>
    <link rel="stylesheet" type="text/css"  href="css/login.css">
</head>
<body>
    <br><br><br><br><br><br>
    <header>
        <img src="gambar/icon.jpeg" class="logo" >
    </header>
    <div class="container">
        <div class="main">
            <div class="left">
                <img src="gambar/ilustrasimesin.jpg">
            </div>
            <div class="right">
                <br><br><br><br>
                <h2 style="text-align: center;">Sign-In</h2>
                <form action="login.php" method="post">
                    <div class="input-group">
                        <span class="icon">👤</span>
                        <input type="text" placeholder="Type your username" id="username" name="username" required>
                    </div>
                    <hr class="hr-style2">
                    <br><br>
                    <div class="input-group">
                        <span class="icon">🔒</span>
                        <input type="text" placeholder="Type your password" id="password" name="password" required>
                    </div>
                    <hr class="hr-style2">
                    <br>
                    
                    <a href="resetpass.php" class="forgot">Lupa Kata Sandi?</a>
                    <p class="p">
                    <a href="sign-up.php" class="back">Belum punya akun?</a></p>
                    <br>
                    <button type="submit" value="Login"><b>Login</b></button>
                    <br><br>
                    <a href="index.php" class="back">Kembali</a>
                    <br>
                    <p class="p"><b>Sign-In menggunakan</b></p>
                    <br>
                    <div class="social-icons">
                        <div class="icon-circle">
                            <img src="gambar/google.png" alt="google.png">
                        </div>
                        <div class="icon-circle">
                            <img src="gambar/facebook.png" alt="facebook.png">
                        </div>
                        <div class="icon-circle">
                            <img src="gambar/apple.png" alt="apple.png">
                        </div>
                    </div>
                    <br><br><br><br>
                </form>
            </div>
        </div>
    </div>
</body>
<br><br><br><br><br><br><br><br>
</html>
