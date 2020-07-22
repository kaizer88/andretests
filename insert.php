<?php
session_start();
include 'conn.php';
	
if(isset($_POST['submit'])){

	$bulk = new MongoDB\Driver\BulkWrite;
		
	$filter = ['id_no' => $_POST['id_no']];
	$options = [];
	$queryset =  new MongoDB\Driver\Query($filter, $options);
	$output = $client->executeQuery("capturing.users", $queryset);
	$stats = current($output->toArray());
	if($stats){
		
		$_SESSION["errormsg"]='ID Number exist, please try again';
		$_SESSION["name"]=$_POST['name'];
		$_SESSION["surname"]=$_POST['surname'];
		$_SESSION["id_no"]=$_POST['id_no'];
		$_SESSION["dob"]=$_POST['dob'];
		header("Location: add.php");
	}
	else
	{
		$document = [
		'name' => $_POST['name'],
		'surname' => $_POST['surname'],
		'id_no' => $_POST['id_no'],
		'dob' => $_POST['dob'],
   ];
   $d = $bulk->insert($document);
   
   $result = $client->executeBulkWrite("capturing.users", $bulk);
   $_SESSION['success'] = "User created successfully";
   header("Location: index.php");
	}

}

?>