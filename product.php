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
        echo"
        <div id='content-wrapper'>";
        $product = strtolower($product);
        $query = "SELECT * FROM indian_temp WHERE name LIKE '".$product."' LIMIT 1";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) != 0){
        while($row = mysqli_fetch_array($result)){
        echo"
            <div class='brand-singleContainer'>
                <h3>Product Information:</h3>
                <table>
                    <tr>
                        <td class='left'>Product Name:</td>
                        <td>".$row['name']."</td>
                    </tr>
                    <tr>
                        <td class='left'>Brand:</td>
                        <td>".$row['company']."</td>
                    </tr>";
                    if($row['contact']!=""){
                    echo"
                    <tr>
                        <td class='left'>Contact:</td>
                        <td>".$row['contact']."</td>
                    </tr>";
                    }
                    if($row['website']!=""){
                    echo"
                    <tr>
                        <td class='left'>Website:</td>
                        <td><a href='".$row['website']."'>".$row['website']."</a></td>
                    </tr>";
                    }
                    echo"
                    <tr>
                        <td class='left'>Category:</td>
                        <td>".$row['category']."</td>
                    </tr>
                    <tr>
                        <td class='left'>Sub Category:</td>
                        <td>".$row['subcategory']."</td>
                    </tr>";
                    if($row['comments']!=""){
                    echo"
                    <tr>
                        <td class='left'>Comments:</td>
                        <td>".$row['comments']."</td>
                    </tr>";
                    }
                    echo"
                </table>
            </div>
        ";
        }
        }
        echo"</div></div></body>"
?>