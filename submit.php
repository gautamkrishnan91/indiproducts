<?php 
	require_once 'connection.php';
	$inserted = 0;
	if (isset($_POST['prod_name'], $_POST['prod_company'], $_POST['prod_cat'], $_POST['prod_subcat'])) {

	mysqli_query($con,"INSERT INTO indian_temp (name, company, contact, website, category, subcategory, comments, created_at)
	VALUES ('$_POST[prod_name]', '$_POST[prod_company]', '$_POST[prod_contact]', '$_POST[prod_web]', '$_POST[prod_cat]', '$_POST[prod_subcat]', '$_POST[prod_comments]', now())");
	$inserted =1;

	mysqli_close($con);

}

echo"
<html>
	<head>";
		include 'headers.php';
        echo"</head>
	<body>";
		include 'header.php';
        if ($inserted == 1) {echo"
    <div class='statusMessageContainer'>Data added successfully, thank you!</div>
    <script>
    	$('.statusMessageContainer').slideDown(500);
    	setTimeout(function(){
	   	$('.statusMessageContainer').slideUp(500);
		}, 4000);
    </script>";}
    echo"
    <div id='content-wrapper'>
    	<div class='submit-form-container'>
    		<h3>Submit an Indian Product</h3>
    		<p>Submit an Indian product here.</p>
    		<div class='form-wrapper'>
    			<form action='submit.php' method='post'>
	    			<table border='0'>
	    				<tr><td valign='middle'><label for='prod_name'>Product name: </label></td><td valign='middle'><input type='text' id='prod_name' name='prod_name'/></td></tr>
	    				<tr><td><label for='prod_company'>Brand: </label></td><td><input type='text' id='prod_company' name='prod_company'/></td></tr>
	    				<tr><td><label for='prod_contact'>Contact: </label></td><td><input type='text' id='prod_contact' name='prod_contact'/></td></tr>
	    				<tr><td><label for='prod_web'>Website: </label></td><td><input type='text' id='prod_web' name='prod_web'/></td></tr>
	    				<tr><td><label for='prod_cat'>Category: </label></td><td>
	    					<select id='prod_cat' name='prod_cat'>
		    					<option value='Food'>Food</option>
		    					<option value='Beverages'>Beverages</option>
		    					<option value='Fashion and Clothing'>Fashion and Clothing</option>
		    					<option value='Electronics'>Electronics</option>
		    					<option value='Consumables'>Consumables</option>
		    					<option value='Two-Wheelers and Automobiles'>Two-Wheelers and Automobiles</option>
		    					<option value='Home and Living'>Home and Living</option>
		    					<option value='Beauty and Personal Care'>Beauty and Personal Care</option>
		    					<option value='Sports and Fitness'>Sports and Fitness</option>
	    					</select></td></tr>
	    				<tr><td><label for='prod_subcat'>Sub Category: </label></td><td><input type='text' id='prod_subcat' name='prod_subcat'/></td></tr>
	    				<tr><td><label for='prod_comments'>Comments: </label></td><td><input type='text' id='prod_comments' name='prod_comments'/></td></tr>
	    			</table>
	    			<input type='submit' value='Submit'/>
    			</form>
    		</div>
    	</div>
    </div>
    </body>";
?>