<!DOCTYPE html>

<?php
class MyDB extends SQLite3 {
	function __construct(){
		$this->open("database.sqlite3");
	}
}

$dbb = new MyDB();

if ( isset($_POST["submit"]) ) {
	//echo "submit";
	//echo "<br/>";

	//echo ($_FILES["file"]['name']);
	echo "<br/>";	echo "<br/>";	echo "<br/>";

	if (isset($_FILES["csv_file"]['name'])) {
		$filename = explode(".", $_FILES["csv_file"]['name']);

		$create_table_sql = "CREATE TABLE IF NOT EXISTS csv_import (
			id INTEGER PRIMARY KEY,
			name  VARCHAR (255) NOT NULL,
			surname  VARCHAR (255) NOT NULL,
			initials  VARCHAR (255) NOT NULL,
			age  INTEGER NOT NULL,
			birth_date TEXT)";
		$dbb->exec($create_table_sql);

		if($filename[1] == 'csv'){
			$handle = fopen($_FILES["csv_file"]['tmp_name'], "r");

			while($data = fgetcsv($handle)) {
				$name = $data[1];
				$surname = $data[2];
				$initials = $data[3];
				$age = $data[4];
				$birth_date = $data[5];
				$sql_insert = "INSERT INTO csv_import(name, surname, initials, age, birth_date) VALUES('$name', '$surname', '$initials',  '$age', '$birth_date')";
				$dbb->exec($sql_insert);
				echo "$name, $surname, $initials, $age, $birth_date <br/>";
			}
			fclose($handle);
			echo "<br/>";
			echo "<br/>";
			echo "<br/> IMPORT DONE";
			echo "<br/>";
			echo("<button onclick=\"location.href='index.php'\">Back to Home</button>");
		}
	}
}


?>
