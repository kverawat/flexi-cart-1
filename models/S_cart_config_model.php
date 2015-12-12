<?php

class S_Cart_config_model extends Database_model {
	protected $table ='cart_config';
	public $primary_key ='config_id';

	protected $rules = [
		'config_id' => ['field' => 'config_id', 'label' => 'Config Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_order_number_prefix' => ['field' => 'config_order_number_prefix', 'label' => 'Config Order Number Prefix', 'rules' => 'max_length[50]|filter_input[50]'],
		'config_order_number_suffix' => ['field' => 'config_order_number_suffix', 'label' => 'Config Order Number Suffix', 'rules' => 'max_length[50]|filter_input[50]'],
		'config_increment_order_number' => ['field' => 'config_increment_order_number', 'label' => 'Config Increment Order Number', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_min_order' => ['field' => 'config_min_order', 'label' => 'Config Min Order', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'config_quantity_decimals' => ['field' => 'config_quantity_decimals', 'label' => 'Config Quantity Decimals', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_quantity_limited_by_stock' => ['field' => 'config_quantity_limited_by_stock', 'label' => 'Config Quantity Limited By Stock', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_increment_duplicate_items' => ['field' => 'config_increment_duplicate_items', 'label' => 'Config Increment Duplicate Items', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_remove_no_stock_items' => ['field' => 'config_remove_no_stock_items', 'label' => 'Config Remove No Stock Items', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_auto_allocate_stock' => ['field' => 'config_auto_allocate_stock', 'label' => 'Config Auto Allocate Stock', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_save_ban_shipping_items' => ['field' => 'config_save_ban_shipping_items', 'label' => 'Config Save Ban Shipping Items', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_weight_type' => ['field' => 'config_weight_type', 'label' => 'Config Weight Type', 'rules' => 'max_length[25]|filter_input[25]'],
		'config_weight_decimals' => ['field' => 'config_weight_decimals', 'label' => 'Config Weight Decimals', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_display_tax_prices' => ['field' => 'config_display_tax_prices', 'label' => 'Config Display Tax Prices', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_price_inc_tax' => ['field' => 'config_price_inc_tax', 'label' => 'Config Price Inc Tax', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_multi_row_duplicate_items' => ['field' => 'config_multi_row_duplicate_items', 'label' => 'Config Multi Row Duplicate Items', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_dynamic_reward_points' => ['field' => 'config_dynamic_reward_points', 'label' => 'Config Dynamic Reward Points', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'config_reward_point_multiplier' => ['field' => 'config_reward_point_multiplier', 'label' => 'Config Reward Point Multiplier', 'rules' => 'if_empty[0.0000]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'config_reward_voucher_multiplier' => ['field' => 'config_reward_voucher_multiplier', 'label' => 'Config Reward Voucher Multiplier', 'rules' => 'if_empty[0.0000]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'config_reward_voucher_ratio' => ['field' => 'config_reward_voucher_ratio', 'label' => 'Config Reward Voucher Ratio', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'config_reward_point_days_pending' => ['field' => 'config_reward_point_days_pending', 'label' => 'Config Reward Point Days Pending', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'config_reward_point_days_valid' => ['field' => 'config_reward_point_days_valid', 'label' => 'Config Reward Point Days Valid', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'config_reward_voucher_days_valid' => ['field' => 'config_reward_voucher_days_valid', 'label' => 'Config Reward Voucher Days Valid', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'config_custom_status_1' => ['field' => 'config_custom_status_1', 'label' => 'Config Custom Status 1', 'rules' => 'max_length[50]|filter_input[50]'],
		'config_custom_status_2' => ['field' => 'config_custom_status_2', 'label' => 'Config Custom Status 2', 'rules' => 'max_length[50]|filter_input[50]'],
		'config_custom_status_3' => ['field' => 'config_custom_status_3', 'label' => 'Config Custom Status 3', 'rules' => 'max_length[50]|filter_input[50]'],
	];
	protected $rule_sets = [
		'insert' => 'config_id,config_order_number_prefix,config_order_number_suffix,config_increment_order_number,config_min_order,config_quantity_decimals,config_quantity_limited_by_stock,config_increment_duplicate_items,config_remove_no_stock_items,config_auto_allocate_stock,config_save_ban_shipping_items,config_weight_type,config_weight_decimals,config_display_tax_prices,config_price_inc_tax,config_multi_row_duplicate_items,config_dynamic_reward_points,config_reward_point_multiplier,config_reward_voucher_multiplier,config_reward_voucher_ratio,config_reward_point_days_pending,config_reward_point_days_valid,config_reward_voucher_days_valid,config_custom_status_1,config_custom_status_2,config_custom_status_3',
		'update' => 'config_order_number_prefix,config_order_number_suffix,config_increment_order_number,config_min_order,config_quantity_decimals,config_quantity_limited_by_stock,config_increment_duplicate_items,config_remove_no_stock_items,config_auto_allocate_stock,config_save_ban_shipping_items,config_weight_type,config_weight_decimals,config_display_tax_prices,config_price_inc_tax,config_multi_row_duplicate_items,config_dynamic_reward_points,config_reward_point_multiplier,config_reward_voucher_multiplier,config_reward_voucher_ratio,config_reward_point_days_pending,config_reward_point_days_valid,config_reward_voucher_days_valid,config_custom_status_1,config_custom_status_2,config_custom_status_3',
	];
	
	public function save($column,$value) {
		$column = 'config_'.str_replace(' ','_',strtolower($column));
	
		return $this->_database->update($this->table,[$column=>$value],['config_id'=>1]);
	}
	
} /* end class */
