<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    header("Location: login.php");
    exit();
}
?>
  <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
<?php 
include "index.php"
?>