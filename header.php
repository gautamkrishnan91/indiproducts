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
					<form action='search.php' method='get'>
					<select id='mainselect' name='category'>
						<option value='All'>All Categories</option>
						<option value='Food'>Food</option>
    					<option value='Beverages'>Beverages</option>
    					<option value='Fashion&Clothing'>Fashion and Clothing</option>
    					<option value='Electronics'>Electronics</option>
    					<option value='Consumables'>Beauty, Personal Care & Consumables</option>
    					<option value='Two-Wheelers&Automobiles'>Two-Wheelers and Automobiles</option>
    					<option value='Home&Living'>Home and Living</option>
    					<option value='Other'>Other</option>
					</select>
					<input type='text' id='searchbox' name='search' placeholder='Search for brand/product'>
					<input type='submit' id='searchbutton'></input>
					</form>
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
				<li id='mainBrands'><a href='brands.php'>Brands</a></li>
				<li>Categories</li>
				<li>Stories</li>
				<li>Blog</li>
				<li>About us</li>
				<li id='mainFeedbackPage'><a href='feedback.php'>Feedback</a></li>
				<li id='mainGetInvolved'><a href='getinvolved.php'>Get involved</a></li>
				<li id='mainSubmitPage' class='flRight'><a href='submit.php'>Submit</a></li>
			</ul>
		</div>
	</div>";
?>