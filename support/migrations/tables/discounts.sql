CREATE TABLE `discounts` (
  `disc_id` int(11) NOT NULL AUTO_INCREMENT,
  `disc_type_fk` smallint(5) NOT NULL DEFAULT '0',
  `disc_method_fk` smallint(5) NOT NULL DEFAULT '0',
  `disc_tax_method_fk` tinyint(1) NOT NULL DEFAULT '0',
  `disc_user_acc_fk` int(11) NOT NULL DEFAULT '0',
  `disc_item_fk` int(11) NOT NULL DEFAULT '0' COMMENT 'Item / Product Id',
  `disc_group_fk` int(11) NOT NULL DEFAULT '0',
  `disc_location_fk` smallint(5) NOT NULL DEFAULT '0',
  `disc_zone_fk` smallint(5) NOT NULL DEFAULT '0',
  `disc_code` varchar(50) NOT NULL DEFAULT '' COMMENT 'Discount Code',
  `disc_description` varchar(255) NOT NULL DEFAULT '' COMMENT 'Name shown in cart when active',
  `disc_quantity_required` smallint(5) NOT NULL DEFAULT '0' COMMENT 'Quantity required for offer',
  `disc_quantity_discounted` smallint(5) NOT NULL DEFAULT '0' COMMENT 'Quantity affected by offer',
  `disc_value_required` double(8,2) NOT NULL DEFAULT '0.00',
  `disc_value_discounted` double(8,2) NOT NULL DEFAULT '0.00' COMMENT '% discount, flat fee discount, new set price - specified via calculation_fk',
  `disc_recursive` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Discount is repeatable multiple times on one item',
  `disc_non_combinable_discount` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Cannot be applied if any other discount is applied',
  `disc_void_reward_points` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Voids any current reward points',
  `disc_force_ship_discount` tinyint(1) NOT NULL DEFAULT '0',
  `disc_custom_status_1` varchar(50) NOT NULL DEFAULT '',
  `disc_custom_status_2` varchar(50) NOT NULL DEFAULT '',
  `disc_custom_status_3` varchar(50) NOT NULL DEFAULT '',
  `disc_usage_limit` smallint(5) NOT NULL DEFAULT '0' COMMENT 'Number of offers available',
  `disc_valid_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `disc_expire_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `disc_status` tinyint(1) NOT NULL DEFAULT '0',
  `disc_order_by` smallint(1) NOT NULL DEFAULT '100' COMMENT 'Default value of 100 to ensure non set ''order by'' values of zero are not before 1,2,3 etc.',
  PRIMARY KEY (`disc_id`),
  UNIQUE KEY `disc_id` (`disc_id`) USING BTREE,
  KEY `disc_item_fk` (`disc_item_fk`),
  KEY `disc_location_fk` (`disc_location_fk`),
  KEY `disc_zone_fk` (`disc_zone_fk`),
  KEY `disc_method_fk` (`disc_method_fk`) USING BTREE,
  KEY `disc_type_fk` (`disc_type_fk`),
  KEY `disc_group_fk` (`disc_group_fk`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;