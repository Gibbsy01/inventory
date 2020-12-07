<?php 

if(empty($location->id)) :

	?><h1>Your New Location</h1><?php

else : 


	?><h1>Edit Location</h1><?php


endif; ?>

<?php if(empty($location->id)) :?>

	   	<form action="http://devcmfive.matt/inventory-location/edit" method="post">
 

<?php else : ?>


		<form action="http://devcmfive.matt/inventory-location/edit/<?php echo $location->id?>" method="post">



<?php endif; ?>






  Location: <input type="text" value ="<?php echo isset($location) ? $location->name : ''; ?>" name="name"><br>
 <!-- Id: <input type="text" name="lname"><br>-->
  Description: <input type="text" value ="<?php echo isset($location) ? $location->description : '';?>" name="description"><br>
  <input type="Submit" value="Save">
</form>

