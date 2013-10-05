<?php 

	require_once 'connection.php';	
	$query = "SELECT * FROM indian_temp";
	$result = mysqli_query($con, $query);

 echo"
<html>
	<head>";
		include 'headers.php';
        echo"
	</head>
	<body>";
		include 'header.php';
        echo"
 		<div id='content-wrapper'>
 		<table class='searchresults'>
 		<tr>
 			<th class='name'>Product Name</th>
 			<th class='brand'>Brand</th>
 			<th class='contact'>Contact</th>
 			<th class='link'>Website</th>
 			<th class='category'>Category</th>
 			<th class='subcategory'>Sub-category</th>
 			<th class='comments'>Comments</th>
 		</tr>
 		<tr><td>";
 			
 		while($row = mysqli_fetch_array($result)){
			echo $row['name']."</td><td>";
			echo $row['company']."</td><td>";
			echo $row['contact']."</td><td class='link'>";
			echo $row['website']."</td><td>";
			echo $row['category']."</td><td>";
			echo $row['subcategory']."</td><td>";
			echo $row['comments']."</td>";
		}

 		echo "</table></div>
        ";
?>