<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    //Database connection
    $conn = new mysqli('localhost','root','','sign_up');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into daftar(username, password, confirm_password)
        values(?, ?, ?)");
        $stmt->bind_param("sss",$username, $password, $confirm_password);
        if ($password !== $confirm_password) {
            echo "Password dan konfirmasi tidak cocok!";
            exit();
        }
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        if ($stmt->execute()) {
            // Redirect ke halaman login
            header("Location: login.php");
            exit();
        } else {
            echo "Gagal menyimpan data: " . $stmt->error;
        }
        
        $stmt->close();
        $conn->close();
    }