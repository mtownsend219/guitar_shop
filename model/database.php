<?php
// Set up the database connection
$dsn = 'mysql:host=webdev.bentley.edu;dbname=F18Team2';
$username = 'F18Team2';
$password = 'F18Team2';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>