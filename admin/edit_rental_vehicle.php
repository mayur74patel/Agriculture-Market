<?php
session_start();
include 'commonincludefiles.php';
global $conn;
include 'header.php';
include 'sidebar.php';
?>
<?php
if (isset($_POST['submitdata']) && $_POST['submitdata'] == 'Update') {
    $iCategoryID = $_POST['iCategoryID'];
 $rental_vehicle_name = $_POST['rental_vehicle_name'];   
	$rental_vehicle_price_max_limit = $_POST['rental_vehicle_price_max_limit'];
	$rental_vehicle_price_min_limit = $_POST['rental_vehicle_price_min_limit'];
	$rental_vehicle_use = $_POST['rental_vehicle_use'];

	
	
    $updatecategory = updaterental_vehicle($iCategoryID,$rental_vehicle_name,$rental_vehicle_price_max_limit,$rental_vehicle_price_min_limit,$rental_vehicle_use);
    
    if ($updatecategory) {
        $message = "<div class='alert alert-success' style='padding: 10px;'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Category data updated successfully.<div class='alert alert-success' style='display:none'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>Success!</strong> Category data updated successfully.
                                </div></div>";
    } else {
        $message = "<div class='alert alert-error' style='padding: 10px;'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error!</strong> problem in updating Category data.<div class='alert alert-success' style='display:none'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>Error!</strong> problem in updating Category data.
                                </div></div>";
    }
}
?>
<style>
    .product input[type="file"]{
        position: absolute;
        bottom: 0;
        left: 10px;
        max-width: 30%;
        min-height: 30%;
        font-size: 25px;
        opacity: 0;   
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
    .imgdisplay{
		margin-bottom: 15px;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Category        
        </h1>        
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <form role="form" method="post" id="addevent" name="eventform" enctype="multipart/form-data">
                <?php
                if (isset($_REQUEST['cid']) && $_REQUEST['cid'] != '') {
                    $categorydata = getrental_vehicleDataByID($_REQUEST['cid']);
                    echo "<input type='hidden' name='iCategoryID' value='" . $_REQUEST['cid'] . "' />";
                }
                ?>    
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Category Details</h3>
                        </div>                         	
                        <div class="box-body">
                            <?php echo $message; ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Rental Vehicle Name*</label>                                
                                    <input type="text" class="form-control" id="rental_vehicle_name" name="rental_vehicle_name" required value="<?php echo (isset($categorydata['rental_vehicle_name']) && $categorydata['rental_vehicle_name'] != '') ? $categorydata['rental_vehicle_name'] : '' ?>" onkeypress="return spacerestri(event, this);">                                
                                </div>
								<div class="form-group">
                                    <label>Rental Vehicle Max Limit*</label>                                
                                    <input type="number" class="form-control" id="rental_vehicle_price_max_limit" name="rental_vehicle_price_max_limit" required value="<?php echo (isset($categorydata['rental_vehicle_price_min_limit']) && $categorydata['rental_vehicle_price_min_limit'] != '') ? $categorydata['rental_vehicle_price_max_limit'] : '' ?>" onkeypress="return spacerestri(event, this);">                                
                                </div>								
								<div class="form-group">
                                    <label>Rental Vehicle Min Limit*</label>                                
                                    <input type="text" class="form-control" id="rental_vehicle_price_min_limit" name="rental_vehicle_price_min_limit" required value="<?php echo (isset($categorydata['rental_vehicle_price_min_limit']) && $categorydata['rental_vehicle_price_min_limit'] != '') ? $categorydata['rental_vehicle_price_min_limit'] : '' ?>" onkeypress="return spacerestri(event, this);">                                
                                </div> 
									<div class="form-group">
                                    <label>Rental Vehicle Use*</label>                                
                                    <input type="text" class="form-control" id="rental_vehicle_use" name="rental_vehicle_use" required value="<?php echo (isset($categorydata['rental_vehicle_use']) && $categorydata['rental_vehicle_use'] != '') ? $categorydata['rental_vehicle_use'] : '' ?>" onkeypress="return spacerestri(event, this);">                                
                                </div>
                            </div>

                        </div> 
                        <div class="box-footer">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Update" name="submitdata">
                            </div>
                        </div>
                    </div>                    
                </div>
            </form>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<?php
include 'footer.php';
?>
</body>
</html>

