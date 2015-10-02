<?php
$rows = array();
$filename = "Data/NFL-players-2013-12-12.csv";

$handle = fopen($filename, "r");
if ($handle !== FALSE) {
    while (($data = fgetcsv($handle)) !== FALSE) {
        $rows[] = $data;
    }
    fclose($handle);
}

// do a print_r() to see if the data is there
#echo '<pre>';
#print_r($rows);
#echo '</pre>';

// Challenge: print the last names only of all the football players
foreach ($rows as $row) {
    echo $row[2] . "<br>";
}

?>
