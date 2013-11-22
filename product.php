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
        if(($category == '') || ($category == 'food') || ($category == 'beverages') || ($category == 'fashion and clothing') || ($category == 'electronics') || ($category == 'consumables') || ($category == 'twowheelers') || ($category == 'homeandliving') || ($category == 'other')){
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
                <ul class='categories-master'>";
                    if($category == ''){
                    $query = "SELECT DISTINCT company FROM indian_temp";
                    }
                    else{
                    $query = "SELECT DISTINCT company FROM indian_temp WHERE category LIKE '".$category."'";
                    }
                    $result = mysqli_query($con, $query);
                    $resultSet = array();
                    while($row = mysqli_fetch_array($result)){
                        $resultSet[] = $row['company'];
                    }
                    for($asci = 97; $asci < 123; $asci++){
                        $charac = chr($asci);
                        for($i=0;$i<count($resultSet);$i++){
                            if(strcasecmp($charac, $resultSet[$i][0])==0){
                                echo"
                                <li>
                                    <ul class='categories-inner'>";
                                    for($i=0;$i<count($resultSet);$i++){
                                        if(strcasecmp($charac, $resultSet[$i][0])==0)
                                        echo "<li>".$resultSet[$i]."</li>";
                                    }
                                echo"</ul>
                                </li>";
                            }
                        }
                    }
            
            echo"</ul></div>";}
        echo"</div></body>"
?>