<?php

	require_once 'connection.php';	
	$con = mysqli_connect("sql102.byethost11.com","b11_13826268","6fb371qx","b11_13826268_products_store");

echo"
<html>
	<head>";
		include 'headers.php';
        echo"
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
	</head>
	<body>";
		include 'header.php';
		$query = "SELECT * FROM brands WHERE category LIKE 'Food' LIMIT 10";
		$result = mysqli_query($con, $query);
		if($result === FALSE){
			echo"<div class='noSearchQuery'>Sorry, something went wrong on our side!</div>";
		}
        echo"
 		<div id='content-wrapper'>
            <div class='categories-left'>
                <ul>
                    <li>All</li>
                    <li>Food</li>
                    <li>Beverages</li>
                    <li>Fashion and Clothing</li>
                    <li>Electronics</li>
                    <li>Beauty, Personal Care and Consumables</li>
                    <li>Two-Wheelers and Automobiles</li>
                    <li>Home and Living</li>
                    <li>Other</li>
                </ul>
            </div>
            <div class='categories-right'>
            </div>
 		</div>
";

?>