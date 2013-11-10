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
		$query = "SELECT DISTINCT company FROM indian_temp";
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
                <ul class='categories-master'>";
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
                                echo"</li>
                                </ul>";
                            }
                        }
                    }
            // for($asci = 97; $asci < 123; $asci++)
            // {
            //     $charac = chr($asci);
            //     echo $charac;
                
            //         echo $charac;
            //         if(strcasecmp($charac, $row['company'][0])==0)
            //         echo $row['company'];
                
            // }
            
            echo"
 		</div>
";

?>