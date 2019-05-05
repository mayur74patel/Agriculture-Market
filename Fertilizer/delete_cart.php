<?php
include 'commonincludefiles.php';
require '../config/constant.php';

if (isset($_REQUEST['catid_1']) && $_REQUEST['catid_1'] != '') {
    
    $update_query = "DELETE FROM cart WHERE id = " . $_REQUEST['catid_1'];        
    $update_res = mysqli_query($conn, $update_query);
                            
    if ($update_res) {
        $success = "1";
    } else {
        $success = "0";
    }    
	echo "<script>window.location='cart.php'</script>";
   
}else{
	
     echo "<script>window.location='index.php'</script>";
}
?>
