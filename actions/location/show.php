<?php

function show_Get ($w){

$p = $w->pathMatch("id");

$location = $w->inventory->getInventoryLocation($p ["id"]);
$inventory_items = $location->getItems();
//$inventory_items_number = $inventory_items_number->getItemNumber();
//$inventory_items = $location->getTotalNumberItem();


$w->ctx("location", $location);
$w->ctx("inventory_items", $inventory_items);
//var_dump($location);


}






