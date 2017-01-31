<?php

class Item
{
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();

    public function __construct($ID,$Name,$Description,$Price)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;

    }#end Item constructor

    public function addExtra($extras)
    {
        $this->Extras[]=$extras;

    }#end addExtra()

}#end Item class

$myItem = new Item(1,"Taco","Our Tacos are awesome!",4.95);
$myItem-> addExtra("Sour Cream");
$myItem-> addExtra("Cheese");
$myItem-> addExtra("Guacamole");
$items[$myItem->Name]=$myItem;

$myItem = new Item(2,"Sundae","Our Sundaes are awesome!",3.95);
$myItem-> addExtra("Sprinkles");
$myItem-> addExtra("Chocolate sauce");
$myItem-> addExtra("Nuts");
$items[$myItem->Name]=$myItem;

$myItem = new Item(3,"Salad","Our Salads are awesome!",5.95);
$myItem-> addExtra("Croutons");
$myItem-> addExtra("Bacon");
$myItem-> addExtra("Lemon Wedges");
$myItem-> addExtra("Avocado");
$items[$myItem->Name]=$myItem;

?>