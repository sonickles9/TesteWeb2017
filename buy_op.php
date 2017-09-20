<?php
	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$db = "testeweb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$selected = mysqli_select_db($conn, "testeweb");
	if (!$selected) {
		die('Invalid query: ' . mysql_error());
	}

		$arg = $_POST['productid'];
		$arg2 = $_POST['quantity'];
		$sql = sprintf("UPDATE testeweb SET qty = '%s%'  WHERE id_product = '%s%' ", mysql_real_escape_string($arg2), mysql_real_escape_string($arg));

		$result = mysqli_query($conn, $sql);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		}
		if ($result->num_rows > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<span>OK!</span>";
		}
		} else {
			echo "<span>Houve um erro :(</span>";
		}
		mysqli_close($conn);
	?>