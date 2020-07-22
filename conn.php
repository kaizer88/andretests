
<?php

	// connect to mongodb
	$client = new MongoDB\Driver\Manager(
   'mongodb+srv://root:root@cluster0.wo1zo.mongodb.net/<dbname>?retryWrites=true&w=majority');
	$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
	//$db = $client->capturing;
	$query =  new MongoDB\Driver\Query([]);
	$bulk = new MongoDB\Driver\BulkWrite;
	 
?>	
	
