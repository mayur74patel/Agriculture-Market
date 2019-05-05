<?php
include 'commonincludefiles.php';
session_start();
if (isset($_REQUEST['catid_1']) ) {
    $insert_query = "INSERT INTO cart SET item_id='" . $_REQUEST['catid_1'] . "',user_id='" . $_SESSION['name_id'] . "' ";        
    $update_res = mysqli_query($conn, $insert_query);

    if ($update_res) {
        $success = "1";
    } else {
        $success = "0";
    }    
	echo "<script>window.location='shop.php'</script>";
}else{
	
     echo "<script>window.location='../404.html'</script>";
}
?>
