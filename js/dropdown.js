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

        document.indian_form.prod_subcat.options[0]=new Option("Soap bars", "sportsvalue", true, false);
        document.indian_form.prod_subcat.options[1]=new Option("Dental care", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[2]=new Option("Hair Oils", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[3]=new Option("Shampoo", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[4]=new Option("Face Wash", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[5]=new Option("Face/Skin Creams", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[6]=new Option("Deodorants", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[7]=new Option("Talcum Powder", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[8]=new Option("Other Beauty Products", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[9  ]=new Option("Other Consumables", "musicvalue", false, false);
    }
    if(sid==6){
        document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Scooters", "sportsvalue", true, false);
        document.indian_form.prod_subcat.options[1]=new Option("Bikes", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[2]=new Option("Hatchback Cars", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[3]=new Option("Sedans", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[4]=new Option("MUV/SUVs", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[5]=new Option("Other Cars", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[6]=new Option("Automobile Accessories", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[7]=new Option("Other Automobiles", "musicvalue", false, false);
    }
    if(sid==7){
        document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Household Provisions", "sportsvalue", true, false);
        document.indian_form.prod_subcat.options[1]=new Option("Cleaning Products", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[2]=new Option("Detergents", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[3]=new Option("Sanitary Products", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[4]=new Option("Furniture", "musicvalue", false, false);
    }
    if(sid==8){
        document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Stationaries", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[1]=new Option("Sports and Fitness", "musicvalue", false, false);
        document.indian_form.prod_subcat.options[2]=new Option("Other", "musicvalue", false, false);
    }
}

function submitFormValidator(){
    if(document.getElementById('prod_name').value != 0){
        if(document.getElementById('prod_company').value != 0){
            if(document.getElementById('captchabox').value != 0){
                return true;
            }
            document.getElementById('captchabox').placeholder='Please enter CAPTCHA.';
            document.getElementById('captchabox').focus();
            return false;
        }
        document.getElementById('prod_company').placeholder='Please provide a brand name.';
        document.getElementById('prod_company').focus();
        return false;
    }
    document.getElementById('prod_name').placeholder='Please provide a product name.';
    document.getElementById('prod_name').focus();
    return false;
}