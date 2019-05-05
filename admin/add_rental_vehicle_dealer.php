<?php
session_start();
include 'commonincludefiles.php';
global $conn;
include 'header.php';
include 'sidebar.php';

if (isset($_POST['submitdata']) ) {
    $rental_owner_name = $_POST['rental_owner_name'];   
	$rental_user_name = $_POST['rental_user_name'];   
	$rental_user_email = $_POST['rental_user_email'];   
	$rental_user_no = $_POST['rental_user_no'];   
	$rental_user_company_name = $_POST['rental_user_company_name'];   
	$rental_user_address_taluka = $_POST['rental_user_address_taluka'];   
	$rental_user_address_district = $_POST['rental_user_address_district'];   
	$rental_user_address_village = $_POST['rental_user_address_village'];   
	$rental_user_address_state = $_POST['rental_user_address_state'];   
	$rental_user_vehicle_name = $_POST['rental_user_vehicle_name'];   
	$rental_user_vehicle_type = $_POST['rental_user_vehicle_type'];   
	$rental_user_vehicle_rate = $_POST['rental_user_vehicle_rate'];   
	$rental_user_vehicle_age = $_POST['rental_user_vehicle_age'];     
	$rental_user_vehicle_available = $_POST['rental_user_vehicle_available'];   
	
	$target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["tImage2"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["tImage2"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["tImage2"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["tImage2"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    
$newfilename2=$_FILES["tImage2"]["name"];
 
//	---------------------------------------------------------------------------
	
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["tImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["tImage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["tImage"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["tImage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }



}
$newfilename=$_FILES["tImage"]["name"];

//-----------------------------------------------------------------------------------
$target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["tImage1"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["tImage1"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["tImage1"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["tImage1"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    
    
    
    
}
$newfilename1=$_FILES["tImage1"]["name"];

   $addcategory = add_rental_vehicle_dealer($rental_owner_name,$rental_user_name,$rental_user_email,$rental_user_no,$rental_user_company_name,$rental_user_address_taluka,$rental_user_address_district,$rental_user_address_village,$rental_user_address_state,$rental_user_vehicle_name,$rental_user_vehicle_type,$rental_user_vehicle_rate,$rental_user_vehicle_age,$rental_user_vehicle_available,$newfilename,$newfilename1,$newfilename2);
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
            <form role="form" method="post"  name="categoryform" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Category Details</h3>
                        </div>                         	
                        <div class="box-body">
                            <?php echo $message; ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Rental Owner Name*</label>                                
                                    <input type="text" class="form-control" id="rental_owner_name" name="rental_owner_name" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Rental User Name.*</label>                                
                                    <input type="text" class="form-control" id="rental_user_name" name="rental_user_name" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                       
                                <div class="form-group">
                                    <label>Rental User Email.*</label>                                
                                    <input type="text" class="form-control" id="rental_user_email" name="rental_user_email" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Rental User Mobile No.*</label>                                
                                    <input type="text" class="form-control" id="rental_user_no" name="rental_user_no" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Rental User Company Name.*</label>                                
                                    <input type="text" class="form-control" id="rental_user_company_name" name="rental_user_company_name" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Rental User Address Taluka.*</label>                                
                                    <input type="text" class="form-control" id="rental_user_address_taluka" name="rental_user_address_taluka" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Rental User Address District.*</label>                                
                                    <input type="text" class="form-control" id="rental_user_address_district" name="rental_user_address_district" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Rental User Address Village.*</label>                                
                                    <input type="text" class="form-control" id="rental_user_address_village" name="rental_user_address_village" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Rental User Address State.*</label>                                
                                    <input type="text" class="form-control" id="rental_user_address_state" name="rental_user_address_state" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Rental User Vehicle Company Name.*</label>                                
                                    <input type="text" class="form-control" id="rental_user_vehicle_name" name="rental_user_vehicle_name" required onkeypress="return spacerestri(event, this);">                                
                                </div>
								<div class="form-group">
                                    <label>Rental Vechicle Type*</label>                                
                                   <select class="form-control" name="rental_user_vehicle_type">
								   <?php
										    global $conn;
    $temp = array();
	$select_query = "SELECT *FROM rental_vehicle ORDER BY rental_vehicle_id DESC";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
      
	  					echo "<option value=". $row['rental_vehicle_name'] .">". $row['rental_vehicle_name'] ."</option>";
	
        }
    }
								   ?>
										<option>
									</select>                               
                                </div>  
								<div class="form-group">
                                    <label>Rental User Vehicle Rate.(per hour)*</label>                                
                                    <input type="text" class="form-control" id="rental_user_vehicle_rate" name="rental_user_vehicle_rate" required onkeypress="return spacerestri(event, this);">                                
                                </div>
								
								<div class="form-group">
                                    <label>Rental User Age.*</label>                                
                                    <input type="number" Max=80 class="form-control" id="rental_user_vehicle_age" name="rental_user_vehicle_age" required onkeypress="return spacerestri(event, this);">                                
                                </div>
								<div class="form-group">
                                    <label>Rental Vehicle User Available.*</label>                                
                                    <input type="number" class="form-control" id="rental_user_vehicle_available" name="rental_user_vehicle_available" required onkeypress="return spacerestri(event, this);">                                
                                </div>
								<div class="form-group categorypic">
                                    <label for="tImage1">Rental User Id Proof* (Size must be 385*500 pixels)</label>
                                    <input type="file" id="tImage1" name="tImage1" required class="productimg">                               
                                </div>
														
								<div class="form-group categorypic">
                                    <label for="tImage2">Rental Vehicle Image* (Size must be 385*500 pixels)</label>
                                    <input type="file" id="tImage2" name="tImage2" required class="productimg">                               
                                </div>																
								<div class="form-group categorypic">
                                    <label for="tImage">Rental Vehicle User Image* (Size must be 385*500 pixels)</label>
                                    <input type="file" id="tImage" name="tImage" required class="productimg">                               
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
<script type="text/javascript">
    $('.categorypic').on('change', '#tImage'||'#tImage1'||'#tImage2', function (e) {
        var fname = e.target.files[0].name;
        var fileExtension;
        fileExtension = fname.replace(/^.*\./, '');
        if (fileExtension != 'gif' && fileExtension != 'jpg' && fileExtension != 'png' && fileExtension != 'jpeg') {
            alert('Image file type must be PNG, JPG, JPEG or GIF');
            $('input[type=file]').val('');
            return false;
        }
        if ((this.files[0].size) > 2048000) {
            alert('File size must be less than or equal to 2 MB');
            $('input[type=file]').val('');
            return false;
        }
    });
</script>
</body>
</html>

