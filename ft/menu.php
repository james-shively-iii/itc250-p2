<?php
//menu.php

//$totalPrice = array_sum($_POST('Price'));

//Meat array[]
$typeMeat = new Meat(1,"Beef Burger","100% all beef ⅓ lbs. Burger pattie",2.99);
$meats[] = $typeMeat;
$typeMeat = new Meat(2,"Beef Dog","100% all beef ¼ lbs. Beef hot dog",1.99);
$meats[] = $typeMeat;
$typeMeat = new Meat(3,"Turkey Burger","100% ⅓ lbs. turkey pattie",3.49);
$meats[] = $typeMeat;
$typeMeat = new Meat(4,"Turkey Dog","100% ¼ lbs. turkey dog",2.49);
$meats[] = $typeMeat;

//Toppings array[]
$typeTopping = new Toppings(1,"Onions","Chopped white onions",0.25);
$toppings[] = $typeTopping;
$typeTopping = new Toppings(2,"Pickles","Dill pickles",0.25);
$toppings[] = $typeTopping;
$typeTopping = new Toppings(3,"Relish","Pickle relish",0.25);
$toppings[] = $typeTopping;

//Sides array[]
$typeSides = new Sides(1,"Fries","Fresh cut potatoes",1.99);
$sides[] = $typeSides;
$typeSides = new Sides(2,"Seasoned Fries","Cajun-style fries",2.49);
$sides[] = $typeSides;
$typeSides = new Sides(3,"Chips","Fresh cut potato chips",1.99);
$sides[] = $typeSides;

//DrinksNDesserts array[]
$typeDrinksNDesserts = new DrinksNDesserts(1,"Small Drink","Pepsi products",0.99);
$drinks[] = $typeDrinksNDesserts;
$typeDrinksNDesserts = new DrinksNDesserts(2,"Medium Drink","Pepsi products",1.49);
$drinks[] = $typeDrinksNDesserts;
$typeDrinksNDesserts = new DrinksNDesserts(3,"Large Drink","Pepsi products",1.99);
$drinks[] = $typeDrinksNDesserts;

//utilizing the var_dump() function
/* echo '<pre>';
var_dump($meats);
var_dump($toppings);
var_dump($sides);
var_dump($drinks);
echo '</pre>';
*/

class Meat{//start Meat class
    //properties
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    
    public function __construct($ID,$Name,$Description,$Price){//start constructor
        //variables
        $this->ID = (int)$ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = (float)$Price;
    }//end constructor
}//end Meat Class
class Toppings{//start Toppings class
    //properties
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    
    public function __construct($ID,$Name,$Description,$Price){//start constructor
        //variables
        $this->ID = (int)$ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = (float)$Price;
    }//end constructor
}//end Toppings class
class Sides{//start Sides class
    //properties
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    
    public function __construct($ID,$Name,$Description,$Price){//start constructor
        //variables
        $this->ID = (int)$ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = (float)$Price;
    }//end constructor
}//end Sides class
class DrinksNDesserts{//start DrinksNDessert class
    //properties
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Flavor = '';
    
    public function __construct($ID,$Name,$Description,$Price){//start constructor
        //variables
        $this->ID = (int)$ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = (float)$Price;
    }//end constructor
    
    public function addFlavor($flavor){//start addExtra
        //variables
        $this->Flavor[] = $flavor;
        
    }//end addExtra()
}//end DrinksNDessert class