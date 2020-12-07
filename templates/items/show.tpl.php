<?php ?>
<h1><?php echo $inventory_item->name;?></h1>
<!-- <p><?php echo $inventory_item->description;?></p>
 -->

<div class="tabs">
    <div class="tab-head">
        <a href="#details">Detailed View</a>
        <?php if (!empty($inventory_item->id)) : ?> 
            <a href="#internal_comments">Internal Comments <span class='label secondary round cmfive__tab-label cmfive__count-internal_comment_section'></span></a>
            <a href="#attachments">Attachments <span class='label secondary round cmfive__tab-label cmfive__count-attachment'></span></a>
            <?php 
                $tab_headers = $w->callHook('core_template', 'tab_headers', $inventory_item); 
                if (!empty($tab_headers)) {
                    echo implode('', $tab_headers);
                }
            ?>
        <?php endif; ?>
    </div>

<div class = "tab-body">
    <?php if (!empty($inventory_item->id)) : ?>
            <div id="attachments">
                    <?php echo $w->partial("listattachments",array("object" => $inventory_item, "redirect" => "/inventory-items/show/{$inventory_item->id}#attachments"), "file"); ?>
            </div>
            <div id="internal_comments">
                    <?php echo $w->partial("listcomments",array("object" => $inventory_item, "internal_only" => true, "redirect" => "/inventory-items/show/{$inventory_item->id}#internal_comments"), "admin"); ?>
            </div>
            <div id="details">

                 <?php echo Html::box("/inventory-items/edit/$inventory_item->inventory_location_id/$inventory_item->id", "Edit Item", "true");?>

                 <?php echo Html::b("/inventory-items/delete/$inventory_item->id", "Delete", "Are you sure you with to delete", null, false, "warning");?>

                <?php echo Html::multiColTable($table);?>


                <!-- <p> ID = <?php echo  $inventory_item->id ?></p>
    
                <p>Description: <br> <?php echo $inventory_item->description?></[td]></p>

                <p>Pruchase Date: <br><?php echo formatDate($inventory_item->dt_due)?></p>

                <img src="http://devcmfive.matt/file/atfile/4" alt="HTML5 Icon" style="width:128px;height:128px;">
   
                <p> Purchase Price :<br><?php echo formatMoney("%.2n", $inventory_item->unit_cost) ?></p> -->
    
                

                <br>

                <h1>Item Number Values</h1>
  
                <?php echo Html::box("/inventory-number/edit/$inventory_item->id","Create New Item Number", "true");?>

            <?php if (!empty($inventory_item_numbers)) : ?>
                <table style="width:100%">
                    <tr>
                        <th>Number Title</th>
                        <th>Number Value</th>   
                        <th>Action</th> 
                    </tr>
             <?php foreach ($inventory_item_numbers as $Item_Numbers) { ?>
        
                    <tr>
                        <td><?php echo $Item_Numbers->number_title ?></td>
                        <td><?php echo $Item_Numbers->number_value ?></td>
   
                        <td>
                            <?php echo Html::box("/inventory-number/edit/$inventory_item->id/$Item_Numbers->id", "Edit", "true");?> 
                            <?php echo Html::b("/inventory-number/delete/$Item_Numbers->id", "Delete", "Are you sure you with to delete", null, false, "warning");?>
                        </td>
                    </tr>
                        <?php   } ?>
                </table>


            <?php endif;?>




            </div>
    <?php endif;?>

</div>
</div>




