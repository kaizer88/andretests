<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
		<li class="nav-item">
      <a class="nav-link" href="add.php">Test 2 - Add user</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="csv_download.php">Test 2 - Generate</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="file_upload.php">Test 2 - Upload csv</a>
    </li>
	</ul>
</nav>
<div class="container">
	<h1>Download CSV</h1>
	<p>Enter the number of rows below</p>

	<form method="post" action="xcsv_download.php">
		<div class="form-group">
			<label for="surname">Number rows:</label>
			<input type="text" name="number_rows" class="form-control" placeholder="Number of rows" id="number_rows">
		</div>
		<button type="submit" name="submit" id='submit' class="btn btn-primary">submit</button>
	</form>
</div>
</body>
</html>
