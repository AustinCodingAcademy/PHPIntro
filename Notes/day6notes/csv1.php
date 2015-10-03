<?php
# note - csv2.php is broken down a bit simpler, look at that for an easier example
$row = 1;
$rows = array();
if (($handle = fopen("Data/NFL-players-2013-12-12.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $rows[] = $data; // append each time the new $data row to rows
        $num = count($data);
        #echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            #echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}

// do a print_r() to see if the data is there
echo '<pre>';
print_r($rows);
echo '</pre>';

?>
