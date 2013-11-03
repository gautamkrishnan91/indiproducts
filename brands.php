<?php

	require_once 'connection.php';	
	$con = mysqli_connect("sql102.byethost11.com","b11_13826268","6fb371qx","b11_13826268_products_store");

echo"
<html>
	<head>";
		include 'headers.php';
        echo"
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
 		<div id='brand-showcase-index'>
                <div class='brand-showcase-header'>Top Food brands<div class='brand-showcase-header-viewall'><a href='categories.php?category=Food'>View all</a></div></div>
                <div class='brand-showcase-boxes'>";
                while($row = mysqli_fetch_array($result)){
                echo "
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'><img src='".$row['url']."'></div>
                        <div class='brand-showcase-element-text'>".$row['brand']."</div>
                    </div>";
               	}
                echo"</div>

                <div class='brand-showcase-header'>Top Electronics brands<div class='brand-showcase-header-viewall'><a href='categories.php?category=Electronics'>View all</a></div></div>
                <div class='brand-showcase-boxes'>";
                	$query = "SELECT * FROM brands WHERE category LIKE 'Electronics' LIMIT 10";
					$result = mysqli_query($con, $query);
					while($row = mysqli_fetch_array($result)){
					echo "
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'><img src='".$row['url']."'></div>
                        <div class='brand-showcase-element-text'>".$row['brand']."</div>
                    </div>";
                	}
                	echo"</div>
            </div>
 		</div>
";

?>