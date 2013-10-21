function submitSubCategory(sender){
	var selectedOption = sender.getElementsByTagName("option")[sender.selectedIndex];
    var sid = selectedOption.getAttribute("sid");

    if(sid==1){
    	document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Baby Foods", "Baby Foods", true, false);
    	document.indian_form.prod_subcat.options[0]=new Option("Biscuits", "Biscuits", true, false);
    	document.indian_form.prod_subcat.options[1]=new Option("Chips", "Chips", false, false);
		document.indian_form.prod_subcat.options[2]=new Option("Chocolates", "Chocolates", false, false);
		document.indian_form.prod_subcat.options[3]=new Option("Coffee Shops", "Coffee Shops", false, false);
		document.indian_form.prod_subcat.options[4]=new Option("Confectioneries", "Confectioneries", false, false);
		document.indian_form.prod_subcat.options[5]=new Option("Ice Creams", "Ice Creams", false, false);
		document.indian_form.prod_subcat.options[6]=new Option("Other Packaged Foods", "Other Packaged Foods", false, false);
		document.indian_form.prod_subcat.options[7]=new Option("Pizzerias", "Pizzerias", false, false);
		document.indian_form.prod_subcat.options[8]=new Option("Restaurants", "Restaurants", false, false);
    }
    if(sid==2){
    	document.indian_form.prod_subcat.options.length=0;

    	document.indian_form.prod_subcat.options[0]=new Option("Coffee/Tea", "Coffee/Tea", true, false);
    	document.indian_form.prod_subcat.options[1]=new Option("Juice", "Juice", false, false);
    	document.indian_form.prod_subcat.options[2]=new Option("Mineral Water", "Mineral Water", false, false);
    	document.indian_form.prod_subcat.options[3]=new Option("Powdered drink mixes", "Powdered drink mixes", false, false);
    	document.indian_form.prod_subcat.options[4]=new Option("Soft Drinks", "Soft Drinks", false, false);
    }
    if(sid==3){
    	document.indian_form.prod_subcat.options.length=0;

    	document.indian_form.prod_subcat.options[0]=new Option("Clothing", "Clothing", true, false);
    	document.indian_form.prod_subcat.options[1]=new Option("Footwear", "Footwear", false, false);
    	document.indian_form.prod_subcat.options[2]=new Option("Watches", "Watches", false, false);
    	document.indian_form.prod_subcat.options[3]=new Option("Wallets", "Wallets", false, false);
    	document.indian_form.prod_subcat.options[4]=new Option("Bags", "Bags", false, false);
        document.indian_form.prod_subcat.options[5]=new Option("Other Fashion and Clothing", "Other Fashion and Clothing", false, false);
    }
    if(sid==4){
        document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Mobiles and Tablets", "Mobiles and Tablets", true, false);
        document.indian_form.prod_subcat.options[1]=new Option("Computers and Laptops", "Computers and Laptops", false, false);
        document.indian_form.prod_subcat.options[2]=new Option("Mobile and Computer Accessories", "Mobile and Computer Accessories", false, false);
        document.indian_form.prod_subcat.options[3]=new Option("TVs", "TVs", false, false);
        document.indian_form.prod_subcat.options[4]=new Option("Large Household Appliances", "Large Household Appliances", false, false);
        document.indian_form.prod_subcat.options[5]=new Option("Small Household Appliances", "Small Household Appliances", false, false);
        document.indian_form.prod_subcat.options[6]=new Option("Other Electronics", "Other Electronics", false, false);
    }
    if(sid==5){
        document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Soap bars", "Soap bars", true, false);
        document.indian_form.prod_subcat.options[1]=new Option("Dental care", "Dental care", false, false);
        document.indian_form.prod_subcat.options[2]=new Option("Hair Oils", "Hair Oils", false, false);
        document.indian_form.prod_subcat.options[3]=new Option("Shampoo", "Shampoo", false, false);
        document.indian_form.prod_subcat.options[4]=new Option("Face Wash", "Face Wash", false, false);
        document.indian_form.prod_subcat.options[5]=new Option("Face/Skin Creams", "Face/Skin Creams", false, false);
        document.indian_form.prod_subcat.options[6]=new Option("Deodorants", "Deodorants", false, false);
        document.indian_form.prod_subcat.options[7]=new Option("Talcum Powder", "Talcum Powder", false, false);
        document.indian_form.prod_subcat.options[8]=new Option("Other Beauty Products", "Other Beauty Products", false, false);
        document.indian_form.prod_subcat.options[9  ]=new Option("Other Consumables", "Other Consumables", false, false);
    }
    if(sid==6){
        document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Scooters", "Scooters", true, false);
        document.indian_form.prod_subcat.options[1]=new Option("Bikes", "Bikes", false, false);
        document.indian_form.prod_subcat.options[2]=new Option("Hatchback Cars", "Hatchback Cars", false, false);
        document.indian_form.prod_subcat.options[3]=new Option("Sedans", "Sedans", false, false);
        document.indian_form.prod_subcat.options[4]=new Option("MUV/SUVs", "MUV/SUVs", false, false);
        document.indian_form.prod_subcat.options[5]=new Option("Other Cars", "Other Cars", false, false);
        document.indian_form.prod_subcat.options[6]=new Option("Automobile Accessories", "Automobile Accessories", false, false);
        document.indian_form.prod_subcat.options[7]=new Option("Other Automobiles", "Other Automobiles", false, false);
    }
    if(sid==7){
        document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Household Provisions", "Household Provisions", true, false);
        document.indian_form.prod_subcat.options[1]=new Option("Cleaning Products", "Cleaning Products", false, false);
        document.indian_form.prod_subcat.options[2]=new Option("Detergents", "Detergents", false, false);
        document.indian_form.prod_subcat.options[3]=new Option("Sanitary Products", "Sanitary Products", false, false);
        document.indian_form.prod_subcat.options[4]=new Option("Furniture", "Furniture", false, false);
    }
    if(sid==8){
        document.indian_form.prod_subcat.options.length=0;

        document.indian_form.prod_subcat.options[0]=new Option("Stationaries", "Stationaries", false, false);
        document.indian_form.prod_subcat.options[1]=new Option("Sports and Fitness", "Sports and Fitness", false, false);
        document.indian_form.prod_subcat.options[2]=new Option("Other", "Other", false, false);
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

//Show comment box in Get Involved Page
function showCommentBox(){
    document.getElementById('addComment').style.display = 'none';
    document.getElementById('involveCommentText').style.display = 'block';
}