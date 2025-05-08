<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
   }
    //Database connection
    $conn = new mysqli('localhost','root','','sign_up');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("select * from daftar where username = ?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if(password_verify($password, $data['password'])) {
            echo "<h2>berhasil</h2>";
        } else {
            echo "<h2>gagal</h2>";
        }
        }else {
        echo "<h2>gagal</h2>";}
}