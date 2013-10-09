<?php
// Create connection
	$con = mysqli_connect("mysql2.000webhost.com","a3538007_geekay","gautam123","a3538007_indiant");

	if(!$con) die('General Connection Error!');									        //Setting up the database

	// Check connection
	
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
	  $con = mysqli_connect("mysql2.000webhost.com","a3538007_geekay","gautam123","a3538007_indiant");
	  $value = mysqli_real_escape_string($con, $value);
	  }
	return $value;
	}
?>