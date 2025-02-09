<?php
$host = 'localhost';
$db = 'hospital_management';
$user = 'root'; // default user for XAMPP/WAMP
$pass = ''; // default password for XAMPP/WAMP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>