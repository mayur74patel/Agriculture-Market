	CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modify_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);
  
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

  
CREATE TABLE `rental_user` (
  `rental_user_id` int(11) NOT NULL,
  `rental_owner_name` varchar(100) NOT NULL,
  `rental_user_name` varchar(100) NOT NULL,
  `rental_user_email` varchar(50) NOT NULL,
  `rental_user_no` varchar(100) NOT NULL,
  `rental_user_image` varchar(100) NOT NULL,
  `rental_user_company_name` varchar(100) NOT NULL,
  `rental_user_address_taluka` varchar(100) NOT NULL,
  `rental_user_address_district` varchar(100) NOT NULL,
  `rental_user_address_village` varchar(100) NOT NULL,
  `rental_user_address_state` varchar(100) NOT NULL,
  `rental_user_vehicle_name` varchar(100) NOT NULL,
  `rental_user_vehicle_type` varchar(100) NOT NULL,
 `rental_user_vehicle_image` varchar(100) NOT NULL, 
 `rental_user_vehicle_rate` varchar(100) NOT NULL,
  `rental_user_vehicle_age` varchar(100) NOT NULL,
  `rental_user_vehicle_proof` varchar(100) NOT NULL,
  `rental_user_vehicle_available` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_delete` tinyint(1) NOT NULL,
  `extra_1` varchar(100) NOT NULL,
  `extra_2` varchar(100) NOT NULL,
  `extra_3` varchar(100) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `rental_user`
  ADD PRIMARY KEY (`rental_user_id`);

ALTER TABLE `rental_user`
  MODIFY `rental_user_id` int(11) NOT NULL AUTO_INCREMENT;
  
CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback_detail` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_delete` tinyint(1) NOT NULL,
  `extra_1` varchar(100) NOT NULL,
  `extra_2` varchar(100) NOT NULL,
  `extra_3` varchar(100) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
  
CREATE TABLE `rental_vehicle` (
  `rental_vehicle_id` int(11) NOT NULL,
  `rental_vehicle_name` varchar(100) NOT NULL,
  `rental_vehicle_price_max_limit` int(10) NOT NULL,
  `rental_vehicle_price_min_limit` int(10) NOT NULL,
  `rental_vehicle_use` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_delete` tinyint(1) NOT NULL,
  `extra_1` varchar(100) NOT NULL,
  `extra_2` varchar(100) NOT NULL,
  `extra_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `rental_vehicle`
  ADD PRIMARY KEY (`rental_vehicle_id`);

ALTER TABLE `rental_vehicle`
  MODIFY `rental_vehicle_id` int(11) NOT NULL AUTO_INCREMENT;
	