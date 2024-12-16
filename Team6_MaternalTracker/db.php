<?php
$host = 'mtdb.cvgeuswekt15.eu-north-1.rds.amazonaws.com';
$db = 'mtdb'; // Your database name
$user = 'admin'; // Your database username
$pass = 'cloudteam6'; // Your database password (leave empty if using XAMPP default)
$charset = 'utf8mb4';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to Amazon RDS successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
