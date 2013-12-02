<?php
    $_GET['category'];
	require_once 'connection.php';	
    $category = check_input($_GET['category']);
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
        $category = strtolower($category);
        if(($category == '') || ($category == 'all') || ($category == 'food') || ($category == 'beverages') || ($category == 'fashion and clothing') || ($category == 'electronics') || ($category == 'consumables') || ($category == 'twowheelers') || ($category == 'homeandliving') || ($category == 'other')){
        echo"
 		<div id='content-wrapper'>
            <div class='categories-left'>
                <ul>
                    <li><a href='categories.php?category=All'>All</a></li>
                    <li><a href='categories.php?category=Food'>Food</a></li>
                    <li><a href='categories.php?category=Beverages'>Beverages</a></li>
                    <li><a href='categories.php?category=Fashion and Clothing'>Fashion and Clothing</a></li>
                    <li><a href='categories.php?category=Electronics'>Electronics</a></li>
                    <li><a href='categories.php?category=Consumables'>Beauty, Personal Care and Consumables</a></li>
                    <li><a href='categories.php?category=Twowheelers'>Two-Wheelers and Automobiles</a></li>
                    <li><a href='categories.php?category=HomeAndLiving'>Home and Living</a></li>
                    <li><a href='categories.php?category=Other'>Other</a></li>
                </ul>
            </div>
            <div class='categories-right'>
                <ul class='categories-master'>";
                    if(($category == '') || ($category == 'all')){
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