<?php

include_once('connection.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    // Menggunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare("SELECT * FROM adminlogin WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();

    // Memeriksa apakah pengguna ditemukan
    if ($user) {
        // Memverifikasi password
        if (password_verify($password, $user['password'])) {
            header("location: adminpage.php");
            exit();
        } else {
            echo "<script language='javascript'>";
            echo "alert('WRONG PASSWORD')";
            echo "</script>";
        }
    } else {
        echo "<script language='javascript'>";
        echo "alert('USER NOT FOUND')";
        echo "</script>";
    }
}
?>
