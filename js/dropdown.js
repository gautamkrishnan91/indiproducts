function submitSubCategory(sender){
	var selectedOption = sender.getElementsByTagName("option")[sender.selectedIndex];
    var sid = selectedOption.getAttribute("sid");

    if(sid==1){
    	document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Baby Foods", "sportsvalue", true, false);
    	document.indian_form.prod_subcat.options[0]=new Option("Biscuits", "sportsvalue", true, false);
    	document.indian_form.prod_subcat.options[1]=new Option("Chips", "musicvalue", false, false);
		document.indian_form.prod_subcat.options[2]=new Option("Chocolates", "musicvalue", false, false);
		document.indian_form.prod_subcat.options[3]=new Option("Coffee Shops", "moviesvalue", false, false);
		document.indian_form.prod_subcat.options[4]=new Option("Confectioneries", "moviesvalue", false, false);
		document.indian_form.prod_subcat.options[5]=new Option("Ice Creams", "moviesvalue", false, false);
		document.indian_form.prod_subcat.options[6]=new Option("Other Packaged Foods", "moviesvalue", false, false);
		document.indian_form.prod_subcat.options[7]=new Option("Pizzerias", "moviesvalue", false, false);
		document.indian_form.prod_subcat.options[8]=new Option("Restaurants", "moviesvalue", false, false);
    }
    if(sid==2){
    	document.indian_form.prod_subcat.options.length=0;

    	document.indian_form.prod_subcat.options[0]=new Option("Coffee/Tea", "sportsvalue", true, false);
    	document.indian_form.prod_subcat.options[1]=new Option("Juice", "musicvalue", false, false);
    	document.indian_form.prod_subcat.options[2]=new Option("Mineral Water", "musicvalue", false, false);
    	document.indian_form.prod_subcat.options[3]=new Option("Powdered drink mixes", "musicvalue", false, false);
    	document.indian_form.prod_subcat.options[4]=new Option("Soft Drinks", "musicvalue", false, false);
    }
    if(sid==3){
    	document.indian_form.prod_subcat.options.length=0;

    	document.indian_form.prod_subcat.options[0]=new Option("Clothing", "sportsvalue", true, false);
    	document.indian_form.prod_subcat.options[1]=new Option("Footwear", "musicvalue", false, false);
    	document.indian_form.prod_subcat.options[2]=new Option("Watches", "musicvalue", false, false);
    	document.indian_form.prod_subcat.options[3]=new Option("Wallets", "musicvalue", false, false);
    	document.indian_form.prod_subcat.options[4]=new Option("Bags", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[5]=new Option("Other Fashion and Clothing", "musicvalue", false, false);
    }
    if(sid==4){
        document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Mobiles and Tablets", "sportsvalue", true, false);
        document.indian_form.prod_subcat.options[1]=new Option("Computers and Laptops", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[2]=new Option("Mobile and Computer Accessories", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[3]=new Option("TVs", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[4]=new Option("Large Household Appliances", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[5]=new Option("Small Household Appliances", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[6]=new Option("Other Electronics", "musicvalue", false, false);
    }
    if(sid==5){
        document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Household Provisions", "sportsvalue", true, false);
        document.indian_form.prod_subcat.options[1]=new Option("Cleaning Products", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[2]=new Option("Stationaries", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[3]=new Option("Household Electricals", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[4]=new Option("Large Household Appliances", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[5]=new Option("Small Household Appliances", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[6]=new Option("Other Electronics", "musicvalue", false, false);
    }
}