<?php

function delete_Get ($w){

$p = $w->pathMatch("id");

$location = $w->inventory->getInventoryLocation($p ["id"]);

$w->ctx("location", $location);

if(!empty($location)){


	$location->delete();


}
	$w->msg("Location Deleted", "/inventory");

}