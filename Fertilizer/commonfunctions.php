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
function cartcount(){
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM cart where user_id='".$_SESSION['name_id']."' ";
    $select_res = mysqli_query($conn, $select_query);
    $test=mysqli_num_rows($select_res);
    return $test;
    
}
function confirmorder($sid){
    global $conn;
	$insert_query = "INSERT INTO order_1 SET user_id=$sid  ";
    $insert_res = mysqli_query($conn, $insert_query);
    if (mysqli_insert_id($conn)) {
        return TRUE;
    }
    echo("Error description: " . mysqli_error($conn));
	return FALSE;
}
function gettotal(){
    global $conn;
    $temp = 0;
    $select_query = "SELECT * FROM cart where user_id='".$_SESSION['name_id']."' ";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
			
										$sel_query = "SELECT *FROM product where id ='" .$row['item_id']. "' ";
										$sel_res = mysqli_query($conn, $sel_query);
										while ($rw = mysqli_fetch_array($sel_res)) {
									        $temp = $temp+$rw['product_price'];
                                        }
                                    }
                                }
                                $_SESSION['total_price']=$temp;
                                return $temp;
}
function getAllcartData(){
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM cart where user_id='".$_SESSION['name_id']."' ";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($select_res)) {
			$temp[$i]['iCategoryID'] = $row['id']; 
            $temp[$i]['quantity'] = $row['quantity'];
            
			
										$sel_query = "SELECT *FROM product where id ='" .$row['item_id']. "' ";
										$sel_res = mysqli_query($conn, $sel_query);
										while ($rw = mysqli_fetch_array($sel_res)) {
											$temp[$i]['product_name'] = $rw['product_name'];
                                            $temp[$i]['product_price'] = $rw['product_price'];
											$temp[$i]['product_details'] = $rw['product_details'];
											$temp[$i]['product_image'] = $rw['product_image'];
                                            $temp[$i]['created_at'] = $row['created_at'];

                                        }
										
            
			$i++;
        }
    }
    return $temp;

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
function userlogin($username, $password) {
    global $conn;
    $login_query = "SELECT * FROM user_1 WHERE email='" . $username . "' AND password='" . $password . "' ";
    $login_res = mysqli_query($conn, $login_query);
    if (mysqli_num_rows($login_res) == 1) {
        $rows = mysqli_fetch_array($login_res);
            $_SESSION['name_1'] = $rows[1];
            $_SESSION['email'] = $rows[3];
            $_SESSION['name_id'] = $rows[0];
            $_SESSION['LAST_ACTIVITY'] = time();
            return TRUE;
        }
        else{
            return FALSE;    
        }
    
}
function checkusers($name,$password,$email) {
    global $conn;
    $select_query = "SELECT * FROM user_1 WHERE name='" . $name . "' ";
    $select_res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($select_res) > 0) {
        return "user_is_same";
    }else{
            $select_query2 = "SELECT * FROM user_1 WHERE email='" . $email . "' ";
            $select_res2 = mysqli_query($conn, $select_query2);
            if (mysqli_num_rows($select_res2) > 0) {
                return "email_is_same";
            }
            else{
                return "successs";
            }
        }            
    
}
function addusers($name,$email,$password,$city,$phone) {
    global $conn;
    $insert_query = "INSERT INTO user_1 SET name='" . $name . "',email='" . $email . "',password='" . $password . "',city='" . $city . "',phone_no='" . $phone . "' ";
    $insert_res = mysqli_query($conn, $insert_query);
    if (mysqli_insert_id($conn)) {
        return TRUE;
    }
    return FALSE;
}
function getAllproductData($cnt) {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM product WHERE cat_id = $cnt";
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

function getAllproduct_Data() {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM product ";
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
