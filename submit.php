<?php echo"
<html>
	<head>";
		include 'headers.php';
        echo"</head>
	<body>";
		include 'header.php';
        echo"
    <div id='content-wrapper'>
    	<div class='submit-form-container'>
    		<h3>Submit an Indian Product</h3>
    		<p>Submit an Indian product here.</p>
    		<div class='form-wrapper'>
    			<label for='prod_name'>Product name: </label> <input type='text' id='prod_name'/>
    			<label for='prod_company'>Brand: </label> <input type='text' id='prod_company'/>
    			<label for='prod_contact'>Contact: </label> <input type='text' id='prod_contact'/>
    			<label for='prod_web'>Website: </label> <input type='text' id='prod_web'/>
    		</div>
    	</div>
    </div>
    </body>";
?>