<?php

function show_Get ($w){

$p = $w->pathMatch("id");

$inventory_item = $w->inventory->getInventoryItem($p ["id"]);
//$inventory_item = $inventory_item->getItems();
$inventory_item_numbers = $inventory_item->getItemNumbers();
$inventory_number = $w->inventory_item_number;



$table = array();
$table["Details"] = array(

						array(
							array("ID", "static", "ID", $inventory_item->id)),
						array(
							array("Description", "staic", "Description", $inventory_item->description)),
						array(
							array("Quantity", "staic", "Quantity", $inventory_item->quantity)),
						);
$table["Purchase Infomation"] = array(
									array(
										array("Purchase Cost", "static", "Purchase Price", formatMoney("%.2n", $inventory_item->unit_cost))),
									array(
										array("Total Cost", "static", "Total Cost", formatMoney("%.2n", $inventory_item->getTotalCost()))),
									array(
										array("Purchase Date", "static", "Purchase Date", formatDate($inventory_item->dt_due)))
								);


$w->ctx("inventory_item", $inventory_item);

$w->ctx("inventory_item_numbers", $inventory_item_numbers);

$w->ctx("table", $table);





}

function edit(\Web $w, $params) {
	$object = $params['object'];
	$redirect = $params['redirect'];
	
	$w->ctx("redirect",$redirect);
	$w->ctx("object",$object);
}




