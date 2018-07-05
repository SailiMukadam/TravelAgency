<?php
	session_start();

	$db = new mysqli('localhost', 'root', '', 'login');

	if(isset($_POST['register_btn'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

	  $sql = "insert into users(username, password) values ('$username', '$password')";
		mysqli_query($db, $sql);
		$_SESSION['username'] = $username;
		header("Location: http://localhost/project/index.html");

	}

?>
