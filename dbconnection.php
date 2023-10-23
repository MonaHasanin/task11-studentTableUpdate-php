<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'school';

try {
    $conn = new PDO(
        "mysql:host=$server;dbname=school",
        $username,
        $password
    );

    //Set the PDO error mode to expection
        // تعيين وضع الأخطاء لـ PDO إلى استثناء
    $conn->setAttribute(
        PDO::ATTR_ERRMODE, 
        PDO::ERRMODE_EXCEPTION
    );
echo "Connected sucessfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>