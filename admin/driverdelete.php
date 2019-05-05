<?php
include 'commonincludefiles.php';
require '../config/constant.php';

if (isset($_REQUEST['catid']) && $_REQUEST['catid'] != '') {
    
    $update_query = "DELETE FROM driver WHERE id = " . $_REQUEST['catid'];        
    $update_res = mysqli_query($conn, $update_query);
                            
    if ($update_res) {
        $success = "1";
    } else {
        $success = "0";
    }    
	echo "<script>window.location='driver_list.php'</script>";
   
}else{
	
     echo "<script>window.location='dashboard.php'</script>";
}
?>
