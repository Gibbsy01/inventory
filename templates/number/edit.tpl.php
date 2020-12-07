<?php 

if(empty($inventory_number->id)) :

	?><h1>Your New Item Number</h1><?php

else : 


	?><h1>Edit Item Number </h1><?php


endif; ?>


<?php if(empty($inventory_number->id)) :?>

	   	<form action="http://devcmfive.matt/inventory-number/edit/<?php echo $inventory_item->id ?>" method="post">
 

<?php else : ?>


		<form action="http://devcmfive.matt/inventory-number/edit/<?php echo $inventory_item->id ?>/<?php echo $inventory_number->id?>" method="post">



<?php endif; ?>







  Number Title: <input type="select" value ="<?php echo isset($inventory_number) ? $inventory_number->number_title : ''; ?>" name="number_title"><br>
  Number Value: <input type="text" value ="<?php echo isset($inventory_number) ? $inventory_number->number_value : ''; ?>" name="number_value"><br>

  
  <input type="Submit" value="Save">
</form>