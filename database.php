<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'hemlata96';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=userInformation", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to Database<br/>';

} catch (PDOException $e) {
    echo $e->getMessage();
}


?>
