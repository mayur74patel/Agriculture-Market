<?php
session_start();
include 'commonincludefiles.php';
global $conn;
include 'header.php';
include 'sidebar.php';

if (isset($_POST['submitdata']) ) {
	
    $company_name = $_POST['company_name'];      
	$company_no = $_POST['company_no'];   
	$company_a_city = $_POST['company_a_city'];   
	$company_a_taluka = $_POST['company_a_taluka'];   
	$company_a_district = $_POST['company_a_district'];   
	$company_a_state = $_POST['company_a_state'];   
	$company_details = $_POST['company_details'];   
	$company_user_id = $_POST['company_user_id'];   
	$rental_user_vehicle_name = $_POST['rental_user_vehicle_name'];   
	$company_user_psw = $_POST['company_user_psw'];
	
	
	$fileArray= array();
	$fileArray=$_FILES['proof']['name'];
	$upload_directory = $CATEGORY_IMAGE_PATH;
	
     $x=0;  
          foreach ( $_FILES['proof']['name'] AS $key => $value ){  
              
               
               move_uploaded_file($_FILES["data"]["tmp_name"][$x], $upload_directory . $_FILES["data"]["name"][$x]);
               $x++;  
			   $filepathnew1= $upload_directory . $_FILES["data"]["name"][$x];
			   if (!file_exists($filepathnew1)) {
            $message = "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error!</strong> ERROR: File not uploaded! <div class='alert alert-success' style='display:none'>
                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                    <strong>Error!</strong> ERROR: File not uploaded!
                            </div></div>";
            unlink($fileTmpLoc1);    
			$fileName1= '';
    $fileName1 = $_FILES['proof']['name'][$x];  
	$fileTmpLoc1 = $_FILES['proof']['tmp_name'][$x];   
    if (!empty($_FILES['proof']) && is_array($_FILES['proof']) && $_FILES['proof']['error'] == 0) {
       $ext = pathinfo($fileName1, PATHINFO_EXTENSION);
        $ext = strtolower($ext);
        $filepath = $CATEGORY_IMAGE_PATH . $fileName1;
        if (!$fileTmpLoc1) { // if file not chosen
            $message = "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error!</strong> ERROR: Please browse for a file before clicking the upload button.<div class='alert alert-success' style='display:none'>
                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                    <strong>Error!</strong> ERROR: Please browse for a file before clicking the upload button.
                            </div></div>";
            exit;
        } else if (!preg_match("/.(gif|jpg|png|JPG|PNG|GIF)$/i", $fileName1)) {
            // This condition is only if you wish to allow uploading of specific file types    
            $message = "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error!</strong> ERROR:Your image was not .gif, .jpg, .png !<div class='alert alert-success' style='display:none'>
                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                    <strong>Error!</strong> ERROR: Your image was not .gif, .jpg, .png !
                            </div></div>";
            unlink($fileTmpLoc1);
            exit;
        }
        }
          }
	}
    $addcategory = add_company_register($company_name,$company_no,$company_a_city,$company_a_taluka,$company_a_district,$company_a_state,$company_details,$company_user_id,$company_user_psw,$fileArray);
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
            <form role="form" method="post"   id="categoryform" name="categoryform" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Category Details</h3>
                        </div>                         	
                        <div class="box-body">
                            <?php echo $message; ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Company Name*</label>                                
                                    <input type="text" class="form-control" id="company_name" name="company_name" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>company User Name.*</label>                                
                                    <input type="text" class="form-control" id="company_user_id" name="company_user_id" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                       
                                <div class="form-group">
                                    <label>Company User Password.*</label>                                
                                    <input type="text" class="form-control" id="compnay_user_psw" name="compnay_user_psw" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Company Mobile No.*</label>                                
                                    <input type="text" class="form-control" id="company_no" name="company_no" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Company Details.*</label>                                
                                    <input type="text" class="form-control" id="company_details" name="company_deails" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Company Address City/Village.*</label>                                
                                    <input type="text" class="form-control" id="company_a_city" name="company_a_city" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Company Address Taluka.*</label>                                
                                    <input type="text" class="form-control" id="company_a_taluka" name="company_a_taluka" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Company Address District.*</label>                                
                                    <input type="text" class="form-control" id="company_a_district" name="company_a_district" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
                                <div class="form-group">
                                    <label>Company Address State.*</label>                                
                                    <input type="text" class="form-control" id="company_a_state" name="company_a_state" required onkeypress="return spacerestri(event, this);">                                
                                </div>                               
								<div class="form-group">  
									<div class="table-responsive">  
										<table class="table table-bordered" id="dynamic_field">  
											<tr>  
												<td><input type="file" name="proof[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
												<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
											</tr>  
										</table>  
									</div>  
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
   
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
<script>
	$(document).ready(function(){  
      var i=1;  
 alert("hello");     
	 $('#add').click(function(){  
	 
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="file" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
        
 });  
</script>
	
</body>
</html>

