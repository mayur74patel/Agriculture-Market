<?php
session_start();
include 'commonincludefiles.php';
global $conn;
include 'header.php';
include 'sidebar.php';

if (isset($_POST['submitdata']) && $_POST['submitdata'] == 'Save') {
    $rental_vehicle_name = $_POST['rental_vehicle_name'];   
	$rental_vehicle_price_max_limit = $_POST['rental_vehicle_price_max_limit'];
	$rental_vehicle_price_min_limit = $_POST['rental_vehicle_price_min_limit'];
	$rental_vehicle_use = $_POST['rental_vehicle_use'];
	
   
    $addcategory = add_rental_vehicle($rental_vehicle_name,$rental_vehicle_price_max_limit,$rental_vehicle_price_min_limit,$rental_vehicle_use);
    if ($addcategory > 0 && $addcategory != '') {
        $message = "<div class='alert alert-success' style='padding: 10px;'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Category data added successfully.<div class='alert alert-success' style='display:none'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>Success!</strong> Category data added successfully.
                                </div></div>";
    } else {
        $message = "<div class='alert alert-error' style='padding: 10px;'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error!</strong> problem in adding category data.<div class='alert alert-success' style='display:none'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>Error!</strong> problem in adding category data.
                                </div></div>";
    }
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Category        
        </h1>        
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <form role="form" method="post" id="addcategory" name="categoryform" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Category Details</h3>
                        </div>                         	
                        <div class="box-body">
                            <?php echo $message; ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Rental Vehicle Name/Type*</label>                                
                                    <input type="text" class="form-control" id="rental_vehicle_name" name="rental_vehicle_name" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Rental Vehicle Max Limit*</label>                                
                                    <input type="number" class="form-control" id="rental_vehicle_price_max_limit" name="rental_vehicle_price_max_limit" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               &nbsp;
                                <div class="form-group">
                                    <label>Rental Vehicle Min Limit*</label>                                
                                    <input type="number" class="form-control" id="rental_vehicle_price_min_limit" name="rental_vehicle_price_min_limit" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                
                                <div class="form-group">
                                    <label>Rental Vehicle Use*</label>                                
                                <textarea rows="4" cols="50" class="form-control" id="rental_vehicle_use" name="rental_vehicle_use" required></textarea>
								</div>                               
								
                                
	                         </div>
                        </div> 
                        <div class="box-footer">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Save" name="submitdata">
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
<?php include 'footer.php'; ?>
</body>
</html>

