<?php
	$_GET['option'];
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
					<th>Created At</th>
				</tr>";
				while($row = mysqli_fetch_array($result)){
				echo"
				<tr>
					<td>".$row['id']."</td>
					<td>".$row['name']."</td>
					<td>".$row['company']."</td>
					<td>".$row['contact']."</td>
					<td>".$row['website']."</td>
					<td>".$row['category']."</td>
					<td>".$row['subcategory']."</td>
					<td>".$row['comments']."</td>
					<td>".$row['created_at']."</td>
				</tr>";
				}
			echo"
			</table>
		</body>
	</html>";
?>