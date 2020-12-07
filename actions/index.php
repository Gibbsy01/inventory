<?php

function index_Get(Web $w){

$locations = $w->Inventory->getInventoryLocations();

$w->ctx("locations", $locations);


}
