<?php include('updateserver.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>update</h2>
	</div>
	
	<form method="post" action="update.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>library id</label>
			<input type="text" name="Library_id">
		</div>
		<div class="input-group">
			<label>book_id</label>
			<input type="text" name="Book_id">
		</div>
		<div class="input-group">
			<label>library name</label>
			<input type="text" name="Library_name" >
		</div>
		<div class="input-group">
			<label>book name</label>
			<input type="text" name="Book_name">
		</div>

		<div class="input-group">
			<label>address</label>
			<input type="text" name="Address">
		</div>
		<div class="input-group">
			<label>availble</label>
			<input type="text" name="Availble">
		</div>
		<div class="input-group">
			<label>Current availble</label>
			<input type="text" name="Curr_available">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Update</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>