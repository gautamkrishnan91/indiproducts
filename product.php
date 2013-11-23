<?php
    $_GET['product'];
	require_once 'connection.php';	
    $product = check_input($_GET['product']);
	$con = mysqli_connect("sql102.byethost11.com","b11_13826268","6fb371qx","b11_13826268_products_store");
echo"
<html>
	<head>";
		include 'headers.php';
        echo"
	</head>
	<body>";
		include 'header.php';
        $product = strtolower($product);
        $query = "SELECT * FROM indian_temp WHERE name LIKE '".$product."' LIMIT 1";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) != 0){
        echo"
 		<div id='content-wrapper'>    
            <div>Hi</div>
        </div>";}
        echo"</div></body>"
?>