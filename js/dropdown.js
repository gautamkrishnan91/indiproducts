function submitSubCategory(sender){
	var selectedOption = sender.getElementsByTagName("option")[sender.selectedIndex];
    var sid = selectedOption.getAttribute("sid");

    if(sid==1){
    	document.indian_form.prod_subcat.options.length=0;

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

    	document.indian_form.prod_subcat.options[0]=new Option("Coffee/Tea", "sportsvalue", true, false);
    	document.indian_form.prod_subcat.options[1]=new Option("Juice", "musicvalue", false, false);
    	document.indian_form.prod_subcat.options[2]=new Option("Mineral Water", "musicvalue", false, false);
    	document.indian_form.prod_subcat.options[3]=new Option("Powdered drink mixes", "musicvalue", false, false);
    	document.indian_form.prod_subcat.options[4]=new Option("Soft Drinks", "musicvalue", false, false);
    }
}