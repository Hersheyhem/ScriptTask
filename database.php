<?php 
$hostname = 'localhost';
$username = 'root';
$password = 'hemlata96';
try {
    $dbh = new PDO("mysql:host=$hostname;dbname=userDetails", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
