<?php
	$con = mysqli_connect("localhost", "Luiza", "pinha1718");
	mysqli_set_charset($con,"utf8");
	if(!$con) {
		echo mysqli_connect_error($con);
	}

	$db = mysqli_select_db($con, "cep");
	if(!$db) {
		echo mysqli_error($con);
	}
?>