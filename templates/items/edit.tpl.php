<?php 

if(empty($inventory_item->id)) :

	?><h1>Your New Item</h1><?php

else : 


	?><h1>Edit Item </h1><?php


endif; ?>


<?php if(empty($inventory_item->id)) :?>

	   	<form action="http://devcmfive.matt/inventory-items/edit/<?php echo $inventory_location->id ?>" method="post">
 

<?php else : ?>


		<form action="http://devcmfive.matt/inventory-items/edit/<?php echo $inventory_location->id ?>/<?php echo $inventory_item->id?>" method="post">



<?php endif; ?>



	

  Item: <input type="text" value ="<?php echo isset($inventory_item) ? $inventory_item->name : ''; ?>" name="name"><br>
  Quantity: <input type="number" step="1" value ="<?php echo isset($inventory_item) ? $inventory_item->quantity : ''; ?>" name="quantity"><br>
  Description: <input type="text" value ="<?php echo isset($inventory_item) ? $inventory_item->description : '';?>" name="description"><br> 
  Unit Cost: <input type="number" step="0.01" value ="<?php echo isset($inventory_item) ? $inventory_item->unit_cost : '';?>" name="unit_cost"><br>
  Date Purchased:	<input class="date_picker" type="text" value ="<?php echo isset($inventory_item) ? formatDate($inventory_item->dt_due) : ''; ?>" name="dt_due" size="" id="dt_due">
	<script>$('#dt_due').datepicker({dateFormat: 'dd/mm/yy', changeMonth: true, changeYear: true});$('#dt_due').keyup( function(event) { $(this).val('');}); </script>
	<br>
	<input type="Submit" value="Save">
</form>

