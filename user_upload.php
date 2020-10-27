<?php 
require "database.php";
$options = ['file:'];

$values = getopt(null, $options);

$lines = file($values['file'], FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);


$csv = array_map('str_getcsv', $lines);
$col_names = array_shift($csv);

$users = [];
foreach($csv as $row) {
    $users[] = [
        $col_names[0] => ucfirst(strtolower($row[0])),
        $col_names[1] => ucfirst(strtolower($row[1])),
        $col_names[2] => filter_var(strtolower($row[2]), FILTER_VALIDATE_EMAIL),
    ];
   var_dump($col_names[0]);
   var_dump($col_names[1]);
   var_dump($col_names[2]);


    $stmt = $dbh->prepare("INSERT INTO users(name, surname, email) 
            VALUES(:name, :surname, :email)");
            $stmt->bindParam(':name', $col_names[0]);
            $stmt->bindParam(':surname', $col_names[1]);
            $stmt->bindParam(':email', $col_names[2]);
            $stmt->execute();
      
}
$dbh = null;
?>
