<?php
	require_once 'connection.php';	
	$con = mysqli_connect("sql102.byethost11.com","b11_13826268","6fb371qx","b11_13826268_products_store");
	$query = "SELECT * FROM indian_temp";
	$result = mysqli_query($con, $query);

echo"
	<html>
		<head>
			<style>
			</style>
		</head>
		<body>
			<table>
				<tr>
					<th>ID</th>
					<th>Product Name</th>
					<th>Brand</th>
					<th>Contact</th>
					<th>Website</th>
					<th>Category</th>
					<th>Sub Category</th>
					<th>Comments</th>
				</tr>";
				while($row = mysqli_fetch_array($result)){
				echo"
				<tr>
					<td>".$row['id']."</td>
					<td><input type='text' value='".$row['name']."'></td>
					<td><input type='text' value='".$row['company']."'></td>
					<td><input type='text' value='".$row['contact']."'></td>
					<td><input type='text' value='".$row['website']."'></td>
					<td><input type='text' value='".$row['category']."'></td>
					<td><input type='text' value='".$row['subcategory']."'></td>
					<td><input type='text' value='".$row['comments']."'></td>
				</tr>";
				}
			echo"
			</table>
		</body>
	</html>";
	// }
?>