<?php
class InventoryItem extends DbObject {

		public $name;
		public $id;
		public $quantity;
		public $inventory_location_id;
		public $description;
		public $unit_cost;
		public $total_cost;
		public $dt_due;
		
		public function getItemNumbers(){
		return $this->getObjects("InventoryItemNumber", ["item_id" => $this->id]);
		}

		public function getTotalCost(){

			return $this->unit_cost * $this->quantity;

		}


 

}





