<?php

function delete_Get ($w){

$p = $w->pathMatch("id");

$inventory_item_number = $w->Inventory->getInventoryNumber($p ["id"]);

$w->ctx("inventory_item_number", $inventory_item_number);

if(!empty($inventory_item_number)){


	$inventory_item_number->delete();


}
	$w->msg("Item Deleted", "/inventory-items/show/$inventory_item_number->item_id ");

}