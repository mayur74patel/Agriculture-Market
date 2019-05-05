<?php

error_reporting(0);

if (!function_exists('pre')) {

    function pre($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        exit;
    }

}

if (!function_exists('pr')) {

    function pr($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}

function login($vEmail, $vPassword) {
    global $conn;
    $login_query = "SELECT * FROM admin WHERE (email = '" . mysqli_real_escape_string($conn, $vEmail) . "') and (password = '" . mysqli_real_escape_string($conn, $vPassword) . "')";
    $login_res = mysqli_query($conn, $login_query);
    if (mysqli_num_rows($login_res) == 1) {
        $rows = mysqli_fetch_array($login_res);
        $_SESSION['email'] = $rows['email'];
        $_SESSION['admin_id'] = $rows['admin_id'];
        $_SESSION['name'] = $rows['name'];
        return 1;
    } else {
        return 0;
    }
}

function changePassword($postData) {
    global $conn;
    $login_query = "SELECT * FROM admin WHERE password = '" . md5($postData['password']) . "' AND admin_id = '" . $_SESSION['admin_id'] . "' ";
    $login_res = mysqli_query($conn, $login_query);
    if (mysqli_num_rows($login_res) > 0) {
        $login_query1 = "UPDATE admin SET password = '" . md5($postData['newpassword']) . "' WHERE admin_id = '" . $_SESSION['admin_id'] . "'";
        if (mysqli_query($conn, $login_query1)) {
            return 1;
        } else {
            return 0;
        }
    } else {
        return 2;
    }
}


function addadmin($admin_name,$admin_password,$admin_email_id) {
    global $conn;
	$insert_query = "INSERT INTO admin SET name='" . $admin_name . "',email='" . $admin_email_id . "',password='" .$admin_password. "' ";
    $insert_res = mysqli_query($conn, $insert_query);
    if (mysqli_insert_id($conn)) {
        return TRUE;
	}
	return FALSE;
}

function add_rental_vehicle_dealer($rental_owner_name,$rental_user_name,$rental_user_email,$rental_user_no,$rental_user_company_name,$rental_user_address_taluka,$rental_user_address_district,$rental_user_address_village,$rental_user_address_state,$rental_user_vehicle_name,$rental_user_vehicle_type,$rental_user_vehicle_rate,$rental_user_vehicle_age,$rental_user_vehicle_available,$newfilename,$newfilename1,$newfilename2) {
    global $conn;
	$newname = rand(1, 99999);
	$insert_query = "INSERT INTO rental_user SET rental_owner_name='" . $rental_owner_name . "',
													rental_user_name='" . $rental_user_name . "',
													rental_user_email='" .$rental_user_email. "',
													rental_user_no='" .$rental_user_no. "',
													rental_user_company_name='" .$rental_user_company_name. "',
													rental_user_address_taluka='" .$rental_user_address_taluka. "',
													rental_user_address_district='" .$rental_user_address_district. "',
													rental_user_address_village='" .$rental_user_address_village. "',
													rental_user_address_state='" .$rental_user_address_state. "',
													rental_user_vehicle_name='" .$rental_user_vehicle_name. "',
													rental_user_vehicle_type='" .$rental_user_vehicle_type. "',
													rental_user_vehicle_rate='" .$rental_user_vehicle_rate. "',
													rental_user_vehicle_age='" .$rental_user_vehicle_age. "',
													rental_user_vehicle_available='" .$rental_user_vehicle_available. "',
													rental_user_vehicle_image='" .$newfilename2. "',
													rental_user_vehicle_proof='" .$newfilename1. "',
													password='" .$newname. "',
													rental_user_image='" .$newfilename. "' ";
    $insert_res = mysqli_query($conn, $insert_query);
    if (mysqli_insert_id($conn)) {
        return TRUE;
	}
	return FALSE;
}


function add_rental_vehicle($rental_vehicle_name,$rental_vehicle_price_max_limit,$rental_vehicle_price_min_limit,$rental_vehicle_use) {
    global $conn;
	$insert_query = "INSERT INTO rental_vehicle SET rental_vehicle_name='" . $rental_vehicle_name . "',rental_vehicle_price_max_limit='" . $rental_vehicle_price_max_limit . "',rental_vehicle_price_min_limit='" .$rental_vehicle_price_min_limit. "',rental_vehicle_use='" .$rental_vehicle_use. "' ";
    $insert_res = mysqli_query($conn, $insert_query);
    if (mysqli_insert_id($conn)) {
        return TRUE;
	}
	return FALSE;
}
function add_category($cateogry_name) {
    global $conn;
	$insert_query = "INSERT INTO category_product SET category_name='" . $cateogry_name . "'";
    $insert_res = mysqli_query($conn, $insert_query);
    if (mysqli_insert_id($conn)) {
        return TRUE;
	}
	return FALSE;
}
function add_product($product_name,$cat_id,$product_price,$product_details,$newfilename1) {
    global $conn;
	$insert_query = "INSERT INTO product SET product_name='" . $product_name . "',cat_id='" . $cat_id . "',product_price='" . $product_price . "',product_details='" . $product_details . "',product_image='" . $newfilename1 . "'";
    $insert_res = mysqli_query($conn, $insert_query);
    if (mysqli_insert_id($conn)) {
        return TRUE;
	}
	return FALSE;
}

function  add_driver($driver_name,$address,$phone_no,$image_name) {
    global $conn;
	$insert_query = "INSERT INTO driver SET name='" . $driver_name . "',address='" . $address . "',phone_no='" . $phone_no . "',image='" . $image_name . "'";
    $insert_res = mysqli_query($conn, $insert_query);
    if (mysqli_insert_id($conn)) {
        return TRUE;
	}
	return FALSE;
}
function getAllrental_vehicle_dealerData() {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM rental_user";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
			$temp[$i]['iCategoryID'] = $row['rental_user_id'];
            $temp[$i]['rental_owner_name'] = $row['rental_owner_name'];
            $temp[$i]['rental_user_name'] = $row['rental_user_name'];
            $temp[$i]['rental_user_email'] = $row['rental_user_email'];
            $temp[$i]['rental_user_no'] = $row['rental_user_no'];
            $temp[$i]['rental_user_image'] = $row['rental_user_image'];
            $temp[$i]['rental_user_company_name'] = $row['rental_user_company_name'];
            $temp[$i]['rental_user_address_taluka'] = $row['rental_user_address_taluka'];
            $temp[$i]['rental_user_address_district'] = $row['rental_user_address_district'];
            $temp[$i]['rental_user_address_village'] = $row['rental_user_address_village'];
            $temp[$i]['rental_user_address_state'] = $row['rental_user_address_state'];
            $temp[$i]['rental_user_vehicle_name'] = $row['rental_user_vehicle_name'];
            $temp[$i]['rental_user_vehicle_type'] = $row['rental_user_vehicle_type'];
            $temp[$i]['rental_user_vehicle_image'] = $row['rental_user_vehicle_image'];
            $temp[$i]['rental_user_vehicle_rate'] = $row['rental_user_vehicle_rate'];
            $temp[$i]['rental_user_vehicle_age'] = $row['rental_user_vehicle_age'];
            $temp[$i]['rental_user_vehicle_proof'] = $row['rental_user_vehicle_proof'];
            $temp[$i]['rental_user_vehicle_available'] = $row['rental_user_vehicle_available'];
			$temp[$i]['created_at'] = $row['created_at'];
            $i++;
        }
    }
    return $temp;
}
function getAllrental_vehicleData() {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM rental_vehicle";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
			$temp[$i]['iCategoryID'] = $row['rental_vehicle_id'];
            $temp[$i]['rental_vehicle_name'] = $row['rental_vehicle_name'];
            $temp[$i]['rental_vehicle_price_max_limit'] = $row['rental_vehicle_price_max_limit'];
            $temp[$i]['rental_vehicle_price_min_limit'] = $row['rental_vehicle_price_min_limit'];
            $temp[$i]['rental_vehicle_use'] = $row['rental_vehicle_use'];
            $i++;
        }
    }
    return $temp;
}
function getAllproductData() {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM product";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
			$temp[$i]['iCategoryID'] = $row['id'];
            $temp[$i]['product_name'] = $row['product_name'];
            $temp[$i]['product_price'] = $row['product_price'];
            $temp[$i]['product_details'] = $row['product_details'];
            $temp[$i]['product_image'] = $row['product_image'];
            $temp[$i]['created_at'] = $row['created_at'];
            $i++;
        }
    }
    return $temp;
}

function getAlladminData() {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM admin";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
			$temp[$i]['iCategoryID'] = $row['admin_id']; 
            $temp[$i]['name'] = $row['name'];
            $temp[$i]['email'] = $row['email'];
            $temp[$i]['created_at'] = $row['created_at'];
            $i++;
        }
    }
    return $temp;
}
function getAllcategoryData() {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM category_product";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
			$temp[$i]['iCategoryID'] = $row['id']; 
            $temp[$i]['name'] = $row['category_name'];
            $temp[$i]['created_at'] = $row['created_at'];
            $i++;
        }
    }
    return $temp;
}

function getAlldriverData() {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM driver";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
			$temp[$i]['iCategoryID'] = $row['id']; 
            $temp[$i]['name'] = $row['name'];
            $temp[$i]['mobile_no'] = $row['phone_no']; 
            $temp[$i]['address'] = $row['address'];
            $temp[$i]['image'] = $row['image']; 
             $i++;
        }
    }
    return $temp;
}


function getAllrental_requestData() {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM rental_request";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
			$temp[$i]['iCategoryID'] = $row['request_id']; 
            $temp[$i]['name'] = $row['name'];
            $temp[$i]['mobile'] = $row['mobile']; 
            $temp[$i]['village'] = $row['village'];
            $temp[$i]['state'] = $row['state'];
            $temp[$i]['implement_required'] = $row['implement_required'];
            $temp[$i]['created_at'] = $row['created_at'];
            $i++;
        }
    }
    return $temp;
}

function oredercount() {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM order_1";
    $select_res = mysqli_query($conn, $select_query);
    return mysqli_num_rows($select_res);
}

function getAllfeedbackData() {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM feedback";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
			$temp[$i]['iCategoryID'] = $row['feedback_id']; 
            $temp[$i]['feedback_detail'] = $row['feedback_detail'];
            
			
										$sel_query = "SELECT *FROM rental_user where rental_user_id ='" .$row['user_id']. "' ";
										$sel_res = mysqli_query($conn, $sel_query);
										while ($rw = mysqli_fetch_array($sel_res)) {
											$temp[$i]['user_id'] = $rw['rental_user_name'];
										}
										
            
			$temp[$i]['created_at'] = $row['created_at'];
            $i++;
        }
    }
    return $temp;
}


function getAllorderData() {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM order_1";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
			$temp[$i]['iCategoryID'] = $row['id']; 
            $temp[$i]['date'] = $row['date'];
            $temp[$i]['user_id']=$row['user_id'];
			
										$sel_query = "SELECT *FROM user_1 where id ='" .$row['user_id']. "' ";
										$sel_res = mysqli_query($conn, $sel_query);
										while ($rw = mysqli_fetch_array($sel_res)) {
                                            $temp[$i]['name'] = $rw['name'];
                                            $temp[$i]['city'] = $rw['city'];
                                            $temp[$i]['email'] = $rw['email'];
                                            
										}
										
            $i++;
        }
    }
    return $temp;
}

function getAllitemData($user_id){
    
    global $conn;
    $temp = array();
    $sel_query_1 = "SELECT *FROM cart where user_id ='" .$user_id. "' ";
										$sel_res_1 = mysqli_query($conn, $sel_query_1);
                                       
                                        while ($rw = mysqli_fetch_array($sel_res_1)) {
                                            
                                            $sel_query_2 = "SELECT *FROM product where id ='" .$rw['item_id']. "' ";
                                            $sel_res_2 = mysqli_query($conn, $sel_query_2);
                                           
										    while ($rw = mysqli_fetch_array($sel_res_2)) {
                                                $temp[$i]['item_id'] = $rw['id'];
                                                $temp[$i]['product_name'] = $rw['product_name'];
                                                $temp[$i]['product_details'] = $rw['product_details'];
                                                $temp[$i]['product_price'] = $rw['product_price'];
                                                $temp[$i]['product_image'] = $rw['product_image'];
                                                $i++;
                                            }
                                        }
                                        return $temp;
}
function getrental_vehicleDataByID($cid) {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM rental_vehicle WHERE rental_vehicle_id = $cid";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
		
        return mysqli_fetch_array($select_res);
    } else {
        return $temp;
    }
}

function updaterental_vehicle($iCategoryID,$rental_vehicle_name,$rental_vehicle_price_max_limit,$rental_vehicle_price_min_limit,$rental_vehicle_use){
	global $conn;
    
        $update_query = "UPDATE rental_vehicle SET rental_vehicle_name= '$rental_vehicle_name', rental_vehicle_price_max_limit= '$rental_vehicle_price_max_limit',rental_vehicle_price_min_limit= '$rental_vehicle_price_min_limit',rental_vehicle_use= '$rental_vehicle_use' WHERE rental_vehicle_id = $iCategoryID";
    
	$update_res = mysqli_query($conn, $update_query);
    if ($update_res) {
        return 1;
    }
    return 0;
}





function add_company_register($company_name,$company_no,$company_a_city,$company_a_taluka,$company_a_district,$company_a_state,$company_details,$newfilename) {
    global $conn;
	$newname = rand(1, 99999);
	$insert_query = "INSERT INTO company_register SET company_name='" . $company_name . "',
													company_no='" . $company_no . "',
													company_a_city='" .$company_a_city. "',
													company_a_taluka='" .$company_a_taluka. "',
													company_a_district='" .$company_a_district. "',
													company_a_state='" .$company_a_state. "',
													company_details='" .$company_details. "',
													company_proof='" .$newfilename. "'
													 ";
    $insert_res = mysqli_query($conn, $insert_query);
	$count=mysqli_num_rows($insert_res);
	
	$select_query = "SELECT * FROM company_register";
	$select_res = mysqli_query($conn, $select_query);
	while ($row = mysqli_fetch_array($select_res)) {
			$temp = $row['id']; 
	}        
	foreach ( $fileArray AS $value ){
	$insert_query = "INSERT INTO company_register SET rental_owner_name='" . $company_name . "' ";
	    $insert_res = mysqli_query($conn, $insert_query);
    }
	if (mysqli_insert_id($conn)) {
        return TRUE;
	}
	return FALSE;
}
