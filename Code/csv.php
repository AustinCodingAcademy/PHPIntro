<?php
    # csv.php - functions for going between CSV format and arrays

    # use header row to build associative array
	function getKeyedCsvRows($filedata,$delimiter=',',$includeNullValues=false) {
		$csvs = getCsvRows($filedata,$delimiter);
		return getKeyedArrayRows($csvs, $includeNullValues);
	}


    # keyedArray must be "full" - no missing fields
    # all this does is prepend a header row of the keys
	function csvFromKeyedArray($keyedArray, $filename=NULL) {
		$headers = array_keys($keyedArray[0]);
		$headerRow = str_putcsv($headers);
		$csvBody = array2csv($keyedArray);
		return "$headerRow\n$csvBody";
	}

	function str_putcsv($input, $delimiter = ',', $enclosure = '"') {
	  # Open a memory "file" for read/write...
	  $fp = fopen('php://temp', 'r+');

	  # write the $input array to the "file" using fputcsv()...
	  fputcsv($fp, $input, $delimiter, $enclosure);

	  # rewind the "file" so we can read what we just wrote...
	  rewind($fp);

	  # read the entire line into a variable...
	  $data = fread($fp, 1048576); #caveat here's a limit in the size of a csv row this can process

	  # close the "file"...
	  fclose($fp);

	  # and return the $data to the caller, with the trailing newline from fgets() removed.
	  return rtrim( $data, "\n" );
	}

	function array2csv($array) {
		$rowStrs = array();
		foreach ($array as $row) {
			$rowStrs[] = str_putcsv($row);
		}
		return implode("\n", $rowStrs);
	}

	function getCsvRows($filedata,$delimiter=',') {
		$filedata = trim($filedata); # trim to remove trailing \n etc
		$rows = explode("\n", $filedata);
		$csvs = array();
		foreach ($rows as $row) {
			$csvs[] = str_getcsv($row,$delimiter);
		}
		return $csvs;
	}

	function getKeyedArrayRows($unkeyedRows, $includeNullValues) {
		# use first row as header row to build associative array
		$fields = $unkeyedRows[0];

		$keyedRows = array();
		$firstRow = true;
		foreach ($unkeyedRows as $unkeyedRow) {
			if ($firstRow) { # first row is header row, skip it
				$firstRow = false;
				continue;
			}

			$newKeyedRow = array();
			foreach ($unkeyedRow as $key => $fieldValue) {
				$fieldName = $fields[$key];
				if ($includeNullValues && ($fieldValue == '' || $fieldValue === NULL)) {
					$newKeyedRow[$fieldName] = NULL;
				}
				elseif ($fieldValue) {
					$newKeyedRow[$fieldName] = $fieldValue;
				}
			}
			if (count($newKeyedRow) > 0) { # add row if not empty
				$keyedRows[] = $newKeyedRow;
			}
		}
		return $keyedRows;
	}

?>
