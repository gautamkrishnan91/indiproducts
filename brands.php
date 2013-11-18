<?php
    $_GET['brand'];
	require_once 'connection.php';	
    $brand = check_input($_GET['brand']);
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
        $brand = strtolower($brand);
        if(($brand == '') || !isset($_GET['brand'])){
 		echo" <div id='brand-showcase-index'>";
                $query = "SELECT * FROM brands WHERE category LIKE 'Food' LIMIT 10";
                $result = mysqli_query($con, $query);
                echo "<div class='brand-showcase-header'>Top Food brands<div class='brand-showcase-header-viewall'><a href='categories.php?category=Food'>View all</a></div></div>
                <div class='brand-showcase-boxes'>";
                while($row = mysqli_fetch_array($result)){
                echo "
                    <div class='brand-showcase-element'>
                        <a href='brands.php?brand=".$row['brand']."'>
                            <div class='brand-showcase-element-box'><img src='".$row['url']."'></div>
                            <div class='brand-showcase-element-text'>".$row['brand']."</div>
                        </a>
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
                        <a href='brands.php?brand=".$row['brand']."'>
                            <div class='brand-showcase-element-box'><img src='".$row['url']."'></div>
                            <div class='brand-showcase-element-text'>".$row['brand']."</div>
                        </a>
                    </div>";
                	}
                	echo"</div>

                <div class='brand-showcase-header'>Top Beverages brands<div class='brand-showcase-header-viewall'><a href='categories.php?category=Beverages'>View all</a></div></div>
                <div class='brand-showcase-boxes'>";
                    $query = "SELECT * FROM brands WHERE category LIKE 'Beverages' LIMIT 10";
                    $result = mysqli_query($con, $query);
                    while($row = mysqli_fetch_array($result)){
                    echo "
                    <div class='brand-showcase-element'>
                        <a href='brands.php?brand=".$row['brand']."'>
                            <div class='brand-showcase-element-box'><img src='".$row['url']."'></div>
                            <div class='brand-showcase-element-text'>".$row['brand']."</div>
                        </a>
                    </div>";
                    }
                    echo"</div>

                <div class='brand-showcase-header'>Top Fashion and Clothing brands<div class='brand-showcase-header-viewall'><a href='categories.php?category=Fashion%20and%20Clothing'>View all</a></div></div>
                <div class='brand-showcase-boxes'>";
                    $query = "SELECT * FROM brands WHERE category LIKE 'Fashion and Clothing' LIMIT 10";
                    $result = mysqli_query($con, $query);
                    while($row = mysqli_fetch_array($result)){
                    echo "
                    <div class='brand-showcase-element'>
                        <a href='brands.php?brand=".$row['brand']."'>
                            <div class='brand-showcase-element-box'><img src='".$row['url']."'></div>
                            <div class='brand-showcase-element-text'>".$row['brand']."</div>
                        </a>
                    </div>";
                    }
                    echo"</div>
            </div>";
            }
            else{
                $query = "SELECT * FROM brands WHERE brand LIKE '".$brand."' LIMIT 1";
                $result = mysqli_query($con, $query);
                if(mysqli_num_rows($result) == 0){
                    echo "<div class='brands-blankslate'>Sorry, no brands found for your query.</div>";
                }
                else{
                    while($row = mysqli_fetch_array($result)){
                        echo "<div class='brand-singleContainer'>
                            <h3>Brand Information</h3>
                            <img src='".$row['url']."'>
                            <table>
                                <tr>
                                    <td class='left'>Brand Name:</td>
                                    <td>".$row['brand']."</td>
                                </tr>
                                <tr>
                                    <td class='left'>Category Served:</td>
                                    <td>".$row['category']."</td>
                                </tr>
                                <tr>
                                    <td class='left'>About:</td>
                                    <td>".$row['about']."</td>
                                </tr>
                            </table>
                        </div>";
                    }
                }
            }
 		echo"</div>
        </body>
    </html>
";

?>