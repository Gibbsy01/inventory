

<?php

//ufunction getItemNumber(){}

function edit_Get($w){
	$p = $w->pathMatch("location_id", "id");

	$inventory_item = $w->inventory->getInventoryItem($p ["id"]);
	$inventory_location = $w->inventory->getInventoryLocation($p ["location_id"]);
	$w->ctx("inventory_item", $inventory_item);
	$w->ctx("inventory_location", $inventory_location);

}
function edit_Post($w){

	$p = $w->pathMatch("location_id", "id");
	

	if(empty($p["id"])) {

		$inventory_item = new InventoryItem($w);

	}
	else{


		$inventory_item = $w->inventory->getInventoryItem($p ["id"]);
		

	}
  	$inventory_item->fill($_POST);
  	$inventory_item->inventory_location_id = $p ["location_id"];

	$inventory_item->insertOrUpdate(true);


	if (empty($p["id"])) {

		$msg = "New Item Created";
	
	}
	else{

		$msg = "Item Changed";

	}


$w->msg($msg, "/inventory-items/show/{$inventory_item->id}");


//va11r_dump($_POST);
//die();


}
