<?php 
	session_start();
	$Library_id = "";
	$Book_id    = "";
	$Library_name="";
	$Book_name = "";
	$Address = "";
	$Available = "";
	$Curr_Available = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost','root','','Library');
	if (isset($_POST['reg_user'])) {
		$Library_id = mysqli_real_escape_string($db, $_POST['Library_id']);
		$Book_id = mysqli_real_escape_string($db, $_POST['Book_id']);
		$Library_name = mysqli_real_escape_string($db, $_POST['Library_name']);
		$Book_name= mysqli_real_escape_string($db, $_POST['Book_name']);
		$Address = mysqli_real_escape_string($db, $_POST['Address']);
		$Available = mysqli_real_escape_string($db, $_POST['Available']);
		$Curr_Available = mysqli_real_escape_string($db, $_POST['Curr_Available']);

		/*$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
*/
		if (count($errors) == 0) {
			//$password = md5($password_1);
			$query = "INSERT INTO vijayawada (Library_id, Book_id,Library_name,Book_name,Address, Available,Curr_available) VALUES('$Library_id', '$Book_id', '$Library_name', '$Book_name', '$Address', '$Available', '$Curr_available')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: indexlib.php');
		}

	}
	// LOGIN USER
	/*if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM lib WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
*/
?>