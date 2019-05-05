<?php

error_reporting(0);



function add_rental_request($name,$mobile,$state,$village,$implement_required) {
echo "Hello";   
   global $conn;
	$insert_query = "INSERT INTO rental_request SET name='" . $name . "',mobile='" . $mobile . "',village='" .$village. "',state='" .$state. "',implement_required='" .$implement_required. "' ";
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

function getAllrental_vehicle_dealer_categoryData($category) {
    global $conn;
    $temp = array();
    $select_query = "SELECT * FROM rental_user where rental_user_vehicle_type='".$category."' ";
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

function getAllrental_vehicle_dealer_priceData() {
    global $conn;
    $temp = array();
	echo("mayur patel");
	exit();
    $select_query = "SELECT * FROM rental_user ORDER BY rental_user_vehicle_rate DESC ";
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
