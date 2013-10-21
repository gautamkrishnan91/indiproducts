<?php 
	$searchSet = 0;
	if(isset($_GET['category'],$_GET['search'])){
		$searchSet = 1;
	}
	require_once 'connection.php';	
	//$con = mysqli_connect("mysql2.000webhost.com","a3538007_geekay","gautam123","a3538007_indiant");
	$con = mysqli_connect("sql102.byethost11.com","b11_13826268","6fb371qx","b11_13826268_products_store");
	//$con = mysqli_connect("localhost","root","","products_store");		

 echo"
<html>
	<head>";
		include 'headers.php';
        echo"
	</head>
	<body>";
		include 'header.php';
        echo"<div id='content-wrapper'>";
 		if($searchSet==0){
 			echo"<div class='noSearchQuery'>Please enter a valid search query.</div>";
 		}
 		else{
 			$category = check_input($_GET['category']);
 			if(($category=='All')||($category=='Food')||($category=='Beverages')||($category=='Fashion&Clothing')||($category=='Electronics')||($category=='Consumables')||($category=='Two-Wheelers&Automobiles')||($category=='Home&Living')||($category=='Other'))
 			{
 				if(empty($_GET['search'])){
 					echo"<div class='noSearchQuery'>Your search query seems to be empty. Please search again!</div>";
 				}
 				else{
 					$category = check_input($_GET['category']);
 					$search = check_input($_GET['search']);

 					$query = "SELECT * FROM indian_temp WHERE name LIKE '%".$search."%'";
 					
					$result = mysqli_query($con, $query);
					
					if($result === FALSE){
						echo"<div class='noSearchQuery'>Sorry, something went wrong on our side!</div>";
					}
					else{
						$num_rows = $result->num_rows;
						if ($num_rows==0){
							echo"<div class='noSearchQuery'>No results found for your search query!</div>";		
						}
						else{
					 		echo"<table class='searchresults'>
					 		<tr>
					 			<th class='name'>Product Name</th>
					 			<th class='brand'>Brand</th>
					 			<th class='link'>Website</th>
					 			<th class='category'>Category</th>
					 			<th class='subcategory'>Sub-category</th>
					 		</tr>";
					 			
					 		while($row = mysqli_fetch_array($result)){
					 			echo "<tr><td>";
								echo $row['name']."</td><td>";
								echo $row['company']."</td><td><a href='";
								echo $row['website']."' target='_blank'>Link</a></td><td>";
								echo $row['category']."</td><td>";
								echo $row['subcategory']."</td>";
							}

		 					echo "</table></div>";
		 				}
 					}
        		}
        	}
        	else{
        		echo"<div class='noSearchQuery'>Oops! There seems to be something wrong with your search query.</div>";
        	}
    	}
?>