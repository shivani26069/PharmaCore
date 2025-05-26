<?php
		$conn = mysqli_connect("localhost:5050", "root", "", "pharmacy");
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
?>