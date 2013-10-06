<?php
// Create connection
	$con=mysqli_connect("localhost","root","","products_store");

	// Check connection
	if (mysqli_connect_errno($con))
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	function check_input($value)
	{
	// Stripslashes
	if (get_magic_quotes_gpc())
	  {
	  $value = stripslashes($value);
	  }
	// Quote if not a number
	if (!is_numeric($value))
	  {
	  $value = mysql_real_escape_string($value);
	  }
	return $value;
	}
?>