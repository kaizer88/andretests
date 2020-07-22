
<?php

	// connect to mongodb
	$collection = new MongoDB\Driver\Manager(
   'mongodb+srv://root:root@cluster0.wo1zo.mongodb.net/<dbname>?retryWrites=true&w=majority');

	//$db = $connection->capturing;
	
	$query =  new MongoDB\Driver\Query([]);
	$bulk = new MongoDB\Driver\BulkWrite;
?>	
	
