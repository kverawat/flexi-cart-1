<?php

class v100_flexi_cart extends package_migration {

	public function up() {
		$this->down();

		$left_menu = setting('Orange Theme','Backend Left Menu',0);

		$access_id = $this->add_access(['name'=>'manage','description'=>'Store Full Access']);
		$parent_id = $this->add_menu(['url'=>'/#','text'=>'Store','parent_id'=>$left_menu,'access_id'=>$access_id,'sort'=>9999]);

		$this->add_menu(['url'=>'/admin/cart/items','text'=>'Items','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/orders','text'=>'Orders','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/currencies','text'=>'Currencies','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/order-status','text'=>'Order Status','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/locations','text'=>'Locations','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/zones','text'=>'Zones','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/shipping-options','text'=>'Shipping Options','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/shipping-rules','text'=>'Shipping Rules','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/taxes','text'=>'Taxes','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/discounts','text'=>'Discounts','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/discount-groups','text'=>'Discount Groups','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/reward-points','text'=>'Reward Points','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/reward-vouchers','text'=>'Rewards Vouchers','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/currencies','text'=>'Currencies','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/order-status','text'=>'Order Status','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);
		$this->add_menu(['url'=>'/admin/cart/defaults','text'=>'Defaults','parent_id'=>$parent_id,'access_id'=>$access_id,'icon'=>'shopping-cart']);

// 'show_as'=>0, /* 0 Textarea, 1 Boolean T/F, 2 Radios (json), 3 Text Input (option width) */
// 'options'=>'', /* Radio {'name': 'value', 'name2': 'value2'}, text width */ 

		/* Orders */
		$this->add_setting(['name'=>'Order Number Prefix','value'=>'','help'=>'Set a prefix value to the cart order number.','show_as'=>3]);
		$this->add_setting(['name'=>'Order Number Suffix','value'=>'','help'=>'Set a suffix value to the cart order number.','show_as'=>3]);
		$this->add_setting(['name'=>'Increment Order Number','value'=>'true','help'=>'Should the cart order number be incremented from the last order number, or should it be a randomly generated number?','show_as'=>1]);
		$this->add_setting(['name'=>'Minimum Order Value','value'=>0,'help'=>'What is the minimum order value? This value can then be checked against a particular summary column.','show_as'=>3,'options'=>2]);

		/* Quantities / Stock */
		$this->add_setting(['name'=>'Quantity Decimals','value'=>0,'help'=>'How many decimals are acceptable for items quantities?','show_as'=>3,'options'=>2]);
		$this->add_setting(['name'=>'Increment Duplicate Quantities','value'=>'true','help'=>'Should an items quantity be incremented when an identical duplicate is added to the cart?','show_as'=>1]);
		$this->add_setting(['name'=>'Quantity Limited by Stock','value'=>'true','help'=>'Should the maximum quantity of cart items be limited to the databases item stock quantity?','show_as'=>1]);
		$this->add_setting(['name'=>'Remove Out-of-Stock Items','value'=>'true','help'=>'Should out-of-stock items be automatically removed from the cart?','show_as'=>1]);
		$this->add_setting(['name'=>'Auto Allocate Item Stock','value'=>'true','help'=>'Should stock quantities be automatically updated and managed by flexi cart?','show_as'=>1]);
		$this->add_setting(['name'=>'Save Banned Shipping Items','value'=>'true','help'=>'If an item is not permitted to be shipped to the current shipping location, yet the user still completes the order, should the item details be saved to the database?','show_as'=>1]);
		$this->add_setting(['name'=>'Multi Row Duplicate Items','value'=>'true','help'=>'Should all duplicate cart items be added as a new separate row in the cart?','show_as'=>1]);

		/* weight */
		$this->add_setting(['name'=>'Weight Type','value'=>'grams','help'=>'Set the default weight to display item weights as.','show_as'=>3,'options'=>3]);
		$this->add_setting(['name'=>'Weight Decimals','value'=>0,'help'=>'Set the default number of decimals points to display item weights by.','show_as'=>3,'options'=>3]);
		
		/* tax */
		$this->add_setting(['name'=>'Display Tax Prices','value'=>'true','help'=>'Should item prices be displayed including tax by default?','show_as'=>1]);
		$this->add_setting(['name'=>'Prices Include Tax','value'=>'true','help'=>'Do item prices typically include tax when added to the cart?','show_as'=>1]);

		/* Reward Points / Vouchers */
		$this->add_setting(['name'=>'Dynamic Reward Points','value'=>'true','help'=>'Should reward points be based on the internal value of an item, or should it be based on the items current tax rate based price?','show_as'=>1]);
		$this->add_setting(['name'=>'Reward Point Multiplier','value'=>10,'help'=>'How many reward points are awarded per 1.00 currency unit of an items price?','show_as'=>3,'options'=>2]);
		$this->add_setting(['name'=>'Reward Voucher Multiplier','value'=>'0.01','help'=>'How much is each reward point worth as a currency value when converted to a reward voucher?','show_as'=>3,'options'=>2]);
		$this->add_setting(['name'=>'Reward Point to Voucher Ratio','value'=>250,'help'=>'How many reward points are required to create 1 reward voucher?','show_as'=>3,'options'=>2]);
		$this->add_setting(['name'=>'Days Reward Point Pending','value'=>14,'help'=>'Once an item order has been set as \'Completed\' (i.e. shipped to customer), after how many days should reward points earnt from the item become active?','show_as'=>3,'options'=>2]);
		$this->add_setting(['name'=>'Days Reward Point Valid','value'=>365,'help'=>'How many days are reward points valid for?','show_as'=>3,'options'=>2]);
		$this->add_setting(['name'=>'Days Reward Voucher Valid','value'=>365,'help'=>'How many days are reward vouchers valid for?','show_as'=>3,'options'=>2]);

		/* creates */
		$tables = glob(__DIR__.'/tables/*.sql');

		foreach ($tables as $table) {
			$sql = file_get_contents($table);
			$this->query($sql);
		}

		/* inserts */
		$inserts = glob(__DIR__.'/inserts/*.sql');

		foreach ($inserts as $insert) {
			$sqls = file_get_contents($insert);

			$sqls = explode(';',$sqls);

			foreach ($sqls as $sql) {
				$this->query($sql);
			}
		}

		return true;
	}

	public function down() {
		$this->remove_access();
		$this->remove_menu();
		$this->remove_setting();

		$this->drop_table('cart_config');
		$this->drop_table('cart_data');
		$this->drop_table('currency');
		$this->drop_table('discounts');
		$this->drop_table('discount_calculation');
		$this->drop_table('discount_columns');
		$this->drop_table('discount_groups');
		$this->drop_table('discount_group_items');
		$this->drop_table('discount_methods');
		$this->drop_table('discount_tax_methods');
		$this->drop_table('discount_types');
		$this->drop_table('item_stock');
		$this->drop_table('locations');
		$this->drop_table('location_type');
		$this->drop_table('location_zones');
		$this->drop_table('order_details');
		$this->drop_table('order_status');
		$this->drop_table('order_summary');
		$this->drop_table('reward_points_converted');
		$this->drop_table('shipping_item_rules');
		$this->drop_table('shipping_options');
		$this->drop_table('shipping_rates');
		$this->drop_table('tax');
		$this->drop_table('tax_item_rates');

		return true;
	}

}