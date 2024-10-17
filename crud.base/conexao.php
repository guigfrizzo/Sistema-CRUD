<?php
	$localhost = "192.168.20.2";
	$user = "root";
	$password = "12345";
	$banco = "guilhermefg";

	$conn = mysqli_connect($localhost, $user, $password, $banco);

	if (! $conn) {
		header("Location: index.html");
	}
?>