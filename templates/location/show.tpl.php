<?php ?>
<h1><?php echo $location->name;?></h1>
<p><?php echo $location->description;?></p>
<!--<h1>Inventory Locations</h1>-->
<table style="width: 100%">
    <tr>
        <th>Total Number of items</th>
        <th>Total Cost of Items</th>
    </tr>  
    <tr>
        <th><?php echo $location->getTotalNumberItems(); ?></th>
        <th><?php echo formatMoney("%.2n",$location->getTotalItemCost())?></th>
    </tr>
</table>

<?php
if (empty($inventory_items) ) : ?>


	<h1><red>No Items Found!<red></h1>
		
		
<?php endif; ?>

<?php echo Html::box("/inventory-items/edit/$location->id", "Create New Item", "true");?>

<?php if(!empty($inventory_items)) { ?>

<table style="width:100%">
  <tr>
    <th>Item</th>
    <th>Id</th>
    <th>Quantity</th>
    <th>Description</th> 
    
    <th>Unit Cost</th>
    
    <th>Action</th> 
  </tr>
	<?php foreach ($inventory_items as $Item) { ?>
		
<tr>
	<?php //var_dump($location)?>
    <td>

    	<a href="/inventory-items/show/<?php echo $Item->id?> "><?php echo $Item->name?></a>
    	 
    </td>
    <td><?php echo $Item->id ?></td>
    <td><?php echo $Item->quantity?></td>
    <td><?php echo $Item->description?></td>
    
   <!-- <td><?php echo $Item->quantity?></td>-->
    <!-- <td><?php echo formatMoney("%.2n", $Item->unit_cost) ?></td> -->
    <td><?php echo formatMoney("%.2n", $Item->unit_cost * $Item->quantity) ?></td>
    <td>
        <?php echo Html::box("/inventory-items/edit/$location->id/$Item->id", "Edit", "true");?>
        <?php echo Html::b("/inventory-items/delete/$Item->id",	"Delete", "Are you sure you with to delete", null, false, "warning");?>
  </tr>


<?php	} ?>

</table>

<?php }