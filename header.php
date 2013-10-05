<?php 

	function curPageName() {
		return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}
	$pageName = curPageName();
echo"
	<div id='setPageName'>$pageName</div>
	<div id='header-wrapper'>
		<div id='header'>
			<div id='logo'></div>
			<div id='header-middle'>
				<div id='searchbar'>
					<select id='mainselect'>
						<option value='All Categories'>All Categories</option>
						<option value='Food'>Food</option>
    					<option value='Beverages'>Beverages</option>
    					<option value='Fashion and Clothing'>Fashion and Clothing</option>
    					<option value='Electronics'>Electronics</option>
    					<option value='Consumables'>Beauty, Personal Care & Consumables</option>
    					<option value='Two-Wheelers and Automobiles'>Two-Wheelers and Automobiles</option>
    					<option value='Home and Living'>Home and Living</option>
    					<option value='Sports and Fitness'>Other</option>
					</select>
					<input type='text' id='searchbox' placeholder='Search for brand/product'>
					<div id='searchbutton'>
						<div id='search-icon'>
						</div>
					</div>
				</div>
			</div>
			<div id='header-right'>
                <div id='social-box'>
                    Find us on:
                    <div id='social-facebook'></div>
                    <div id='social-twitter'></div>
                </div>
            </div>
		</div>
	</div>
	<div id='menubar-wrapper'>
		<div id='menubar'>
			<ul> 
				<li id='mainHomepage'><a href='index.php'>Home</a></li>
				<li>Brands</li>
				<li>Categories</li>
				<li>Stories</li>
				<li>Blog</li>
				<li>About us</li>
				<li>Feedback</li>
				<li>Get involved</li>
				<li id='mainSubmitPage' class='flRight'><a href='submit.php'>Submit</a></li>
			</ul>
		</div>
	</div>";
?>