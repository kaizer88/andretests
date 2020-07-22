<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>User Capture</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  
  <style>
.error {color: #FF0000;}
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Test 1 - Display users</a>
    </li>
	<ul class="navbar-nav">
		<li class="nav-item active">
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
  <h1>Add User</h1>
  <p>Add user details</p>      
<?php
   if(isset($_SESSION['errormsg'])){
      echo "<div class='alert alert-warning'>".$_SESSION['errormsg']."</div>";
   }
?>
<form method="post" action="insert.php" name="addUser">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name" id="name" value='<?php if(isset($_SESSION['name'])) echo $_SESSION["name"]; ?>'>
	
  </div>
  <div class="form-group">
    <label for="surname">Surname:</label>
    <input type="text" name="surname"  class="form-control" placeholder="Enter surname" id="surname" value='<?php if(isset($_SESSION["surname"])) echo $_SESSION["surname"]; ?>'>
	
  </div>
  <div class="form-group">
    <label for="id_no">Id No:</label>
    <input type="text" name="id_no"  class="form-control" placeholder="Enter id_no" id="id_no" value='<?php if(isset($_SESSION["id_no"])) echo $_SESSION["id_no"]; ?>'>

  </div>
  <div class="form-group">
    <label for="dob">Date of Birth:</label>
    <input type="text" name="dob" class="form-control" placeholder="Enter date of birth" id="dob" value='<?php if(isset($_SESSION["dob"])) echo $_SESSION["dob"]; ?>'>

  </div>
  
  <button type="submit" name="submit" id='submit' class="btn btn-primary">Save</button>

  <a href="index.php"><input type="button" class="btn btn-primary" value="Cancel"></a>
</form>
</div>

</body>
<script src="js/script.js"></script>
<script src="js/form-validation.js"></script>
</html>
<?php
session_destroy();
?>