<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
// Create connection
	// $con = mysqli_connect("mysql2.000webhost.com","a3538007_geekay","gautam123","a3538007_indiant");
	$con = mysqli_connect("sql102.byethost11.com","b11_13826268","6fb371qx","b11_13826268_products_store");
	//$con = mysqli_connect("localhost","root","","products_store");

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
	  // $con = mysqli_connect("mysql2.000webhost.com","a3538007_geekay","gautam123","a3538007_indiant");
	  	//$con = mysqli_connect("sql102.byethost11.com","b11_13826268","6fb371qx","b11_13826268_products_store");
	  	$con = mysqli_connect("localhost","root","","products_store");
	  $value = mysqli_real_escape_string($con, $value);
	  }
	return $value;
	}
?>