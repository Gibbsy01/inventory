

<?php


function edit_Get($w){
	$p = $w->pathMatch("id");

	$location = $w->inventory->getInventoryLocation($p ["id"]);

	$w->ctx("location", $location);


}
function edit_Post($w){

	$p = $w->pathMatch("id");
	if(empty($p["id"])) {

		$InventoryLocation = new InventoryLocation($w);

	}
	else{


		$InventoryLocation = $w->inventory->getInventoryLocation($p ["id"]);
		

	}
  	$InventoryLocation->fill($_POST);

	$InventoryLocation->insertOrUpdate(true);


	if (empty($p["id"])) {

		$msg = "new location created";
	
	}
	else{

		$msg = "location changed";

	}


$w->msg($msg, "inventory/");


//va11r_dump($_POST);
//die();


}
