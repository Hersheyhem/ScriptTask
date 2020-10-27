<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'yourpasswordhere';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=userDetails", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to Database';

} catch (PDOException $e) {
    echo $e->getMessage();
}


?>
