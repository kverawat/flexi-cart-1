CREATE TABLE `cart_data` (
  `cart_data_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_data_user_fk` int(11) NOT NULL DEFAULT '0',
  `cart_data_array` text NOT NULL DEFAULT '',
  `cart_data_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cart_data_readonly_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cart_data_id`),
  UNIQUE KEY `cart_data_id` (`cart_data_id`) USING BTREE,
  KEY `cart_data_user_fk` (`cart_data_user_fk`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
