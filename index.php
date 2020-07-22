<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Test 1& 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Test 1 - Display users</a>
    </li>
	<ul class="navbar-nav">
		<li class="nav-item">
      <a class="nav-link" href="add.php">Test 1 - Add user</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="csv_download.php">Test 2 - Generate</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="file_upload.php">Test 2 - Upload csv</a>
    </li>
  </ul>
</nav>
<div class="container">
  <h1>User Capture</h1>
  <p>Add and update user details</p>      
	<?php

   if(isset($_SESSION['success'])){
      echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
   }

	?>
	<table class="table table-hover">
	<a href="add.php"><input type="button" class="btn btn-primary" class="fa fa-home" value="Add User"></a><br /><br />

    <thead>
      <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Id No</th>
		<th>Date of Birth</th>
      </tr>
    </thead>
    <tbody>
	<?php
	
	require 'connection.php';
	
	$users = $collection->executeQuery("capturing.users", $query);
	//$users = $collection->find([]);


     foreach($users as $user) {
        echo "<tr>";
        echo "<td>".$user->name."</td>";
        echo "<td>".$user->surname."</td>";
		echo "<td>".$user->id_no."</td>";
		echo "<td>".$user->dob."</td>";
        echo "</tr>";
      };
	
    ?> 
    </tbody>
  </table>
</div>

</body>
</html>
<?php
session_destroy();
?>