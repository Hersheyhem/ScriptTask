<?php 
require 'database.php';



$options = ['file:'];

$values = getopt(null, $options);

$lines = file($values['file'], FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
$csv = array_map('str_getcsv', $lines);


$users = [];
$stmt = $dbh->prepare('INSERT INTO users (name, surname, email) VALUES (?,?,?)'); 
foreach($csv as $row) {
    $users[] = [
        $col_names[0] => ucfirst(strtolower($row[0])),
        $col_names[1] => ucfirst(strtolower($row[1])),
        $col_names[2] => strtolower(strtolower($row[2])),
    ];
}

foreach($users as $user) {
    $stmt->execute($user);
}

?>




