<?php

class InventoryLocation extends DbObject {

	public $name;
	public $description;

	//
	public function getItems(){
		return $this->getObjects("InventoryItem", ["inventory_location_id" => $this->id]);
	}

	//this function returns total number of items as int
	public function getTotalNumberItems(){

		return count($this->getItems());
	}

	//This Function Gets Total cost of all items
	public function getTotalItemCost(){

		$ListItems = $this->getItems();
		$Total = 0;

		if(!empty($ListItems)){

			foreach ($this->getItems() as $InventoryItem) {
		

				$Total += $InventoryItem->getTotalCost();
	

			
			}


			return $Total;
	}
}
}

