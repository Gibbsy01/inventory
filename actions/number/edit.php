<?php

function edit_Get($w){
	$p = $w->pathMatch("item_id", "item_number");

	$inventory_item = $w->inventory->getInventoryItem($p ["item_id"]);
	$inventory_number = $w->inventory->getInventoryNumber($p ["item_number"]);
	$w->ctx("inventory_item", $inventory_item);
	$w->ctx("inventory_number", $inventory_number);


	}

	function edit_Post($w){

	$p = $w->pathMatch("item_id", "item_number");
	

	if(empty($p["item_number"])) {

		$inventory_number = new InventoryItemNumber($w);
		$inventory_item = $w->inventory->getInventoryItem($p ["item_id"]);
	}
	else{


		$inventory_number = $w->inventory->getInventoryNumber($p ["item_number"]);
		$inventory_item = $w->inventory->getInventoryItem($p ["item_id"]);

	}
	//$inventory_item->fill($_POST);
  	//$inventory_item->inventory_item->id = $p ["item_id"];

	//$inventory_item->insertOrUpdate(true);

  	$inventory_number->fill($_POST);
  	$inventory_number->item_id = $p ["item_id"];

	$inventory_number->insertOrUpdate(true);


	if (empty($p["item_number"])) {

		$msg = "New Item Number Created";
	
	}
	else{

		$msg = "Item Number Changed";

	}
	

$w->msg($msg, "/inventory-items/show/$inventory_item->id");
}