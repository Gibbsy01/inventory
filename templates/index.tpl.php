<h1>Inventory Locations</h1>


<?php
if (empty($locations) ) : ?>

	<title>Inventory XD</title>
	<h2><red>No Locations Found!<red></h2>
		
		
<?php endif; ?>

<?php echo Html::box("/inventory-location/edit", "Create New Location", "true");?> <br>
<?php if($locations) { ?>
<br>
<table style="width:100%">
  <tr>
    <th>Location</th>
    <th>Id</th> 
    <th>Total Number of Items</th>
    <th>Total Cost Of Items</th>
    <th>Actions</th>
  </tr>
	<?php foreach ($locations as $location) { ?>
		
<tr>
	<?php //var_dump($location)?>
    <td>

    	<a href="/inventory-location/show/<?php echo $location->id?>"><?php echo $location->name?></a>
    </td>
    <td><?php echo $location->id ?></td>
    <th><?php echo $location->getTotalNumberItems(); ?></th>
    <th><?php echo formatMoney("%.2n",$location->getTotalItemCost())?></th>
    <td><?php echo Html::box("/inventory-location/edit/$location->id","Edit", "true");?>
        <?php echo Html::b("/inventory-location/delete/$location->id", "Delete", "Are you sure you with to delete", null, false, "warning");?>
    </td>
  </tr>


<?php	} ?>

</table>

<?php }