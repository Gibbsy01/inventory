<?php


class InventoryService extends DbService {

public function getInventoryItem($Item_id) {
        return $this->getObject("InventoryItem", $Item_id);
    }


public function getInventoryLocations(){
		return $this->getObjects("InventoryLocation");
	}

public function getInventoryLocation($Location_id) {
        return $this->getObject("InventoryLocation", $Location_id);
    }
public function getInventoryNumber($number_id) {
        return $this->getObject("InventoryItemNumber", $number_id);
    }

function edit(\Web $w, $params) {
	$object = $params['object'];
	$redirect = $params['redirect'];
	
	$w->ctx("redirect",$redirect);
	$w->ctx("object",$object);
}




}



