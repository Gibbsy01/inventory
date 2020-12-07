<?php

function delete_Get ($w){

$p = $w->pathMatch("id");

$inventory_item = $w->inventory->getInventoryItem($p ["id"]);

$w->ctx("inventory_item", $inventory_item);

if(!empty($inventory_item)){


	$inventory_item->delete();


}
	$w->msg("Item Deleted", "/inventory-location/show/$inventory_item->inventory_location_id ");

}