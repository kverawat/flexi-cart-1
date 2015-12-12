<?php

class S_Order_summary_model extends Database_model {
	protected $table ='order_summary';
	public $primary_key ='ord_order_number';

	protected $rules = [
		'ord_order_number' => ['field' => 'ord_order_number', 'label' => 'Ord Order Number', 'rules' => 'required|max_length[25]|filter_input[25]'],
		'ord_cart_data_fk' => ['field' => 'ord_cart_data_fk', 'label' => 'Ord Cart Data Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ord_user_fk' => ['field' => 'ord_user_fk', 'label' => 'Ord User Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ord_item_summary_total' => ['field' => 'ord_item_summary_total', 'label' => 'Ord Item Summary Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_item_summary_savings_total' => ['field' => 'ord_item_summary_savings_total', 'label' => 'Ord Item Summary Savings Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_shipping' => ['field' => 'ord_shipping', 'label' => 'Ord Shipping', 'rules' => 'max_length[100]|filter_input[100]'],
		'ord_shipping_total' => ['field' => 'ord_shipping_total', 'label' => 'Ord Shipping Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_item_shipping_total' => ['field' => 'ord_item_shipping_total', 'label' => 'Ord Item Shipping Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_summary_discount_desc' => ['field' => 'ord_summary_discount_desc', 'label' => 'Ord Summary Discount Desc', 'rules' => 'max_length[255]|filter_input[255]'],
		'ord_summary_savings_total' => ['field' => 'ord_summary_savings_total', 'label' => 'Ord Summary Savings Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_savings_total' => ['field' => 'ord_savings_total', 'label' => 'Ord Savings Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_surcharge_desc' => ['field' => 'ord_surcharge_desc', 'label' => 'Ord Surcharge Desc', 'rules' => 'max_length[255]|filter_input[255]'],
		'ord_surcharge_total' => ['field' => 'ord_surcharge_total', 'label' => 'Ord Surcharge Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_reward_voucher_desc' => ['field' => 'ord_reward_voucher_desc', 'label' => 'Ord Reward Voucher Desc', 'rules' => 'max_length[255]|filter_input[255]'],
		'ord_reward_voucher_total' => ['field' => 'ord_reward_voucher_total', 'label' => 'Ord Reward Voucher Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_tax_rate' => ['field' => 'ord_tax_rate', 'label' => 'Ord Tax Rate', 'rules' => 'max_length[25]|filter_input[25]'],
		'ord_tax_total' => ['field' => 'ord_tax_total', 'label' => 'Ord Tax Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_sub_total' => ['field' => 'ord_sub_total', 'label' => 'Ord Sub Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_total' => ['field' => 'ord_total', 'label' => 'Ord Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_total_rows' => ['field' => 'ord_total_rows', 'label' => 'Ord Total Rows', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ord_total_items' => ['field' => 'ord_total_items', 'label' => 'Ord Total Items', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_total_weight' => ['field' => 'ord_total_weight', 'label' => 'Ord Total Weight', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_total_reward_points' => ['field' => 'ord_total_reward_points', 'label' => 'Ord Total Reward Points', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ord_currency' => ['field' => 'ord_currency', 'label' => 'Ord Currency', 'rules' => 'max_length[25]|filter_input[25]'],
		'ord_exchange_rate' => ['field' => 'ord_exchange_rate', 'label' => 'Ord Exchange Rate', 'rules' => 'if_empty[0.0000]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_status' => ['field' => 'ord_status', 'label' => 'Ord Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'ord_date' => ['field' => 'ord_date', 'label' => 'Ord Date', 'rules' => 'if_empty[0000-00-00 00:00:00]|if_empty[now(Y-m-d H:i:s)]|required|max_length[24]|valid_datetime|filter_input[24]'],
	];
	protected $rule_sets = [
		'insert' => 'ord_order_number,ord_cart_data_fk,ord_user_fk,ord_item_summary_total,ord_item_summary_savings_total,ord_shipping,ord_shipping_total,ord_item_shipping_total,ord_summary_discount_desc,ord_summary_savings_total,ord_savings_total,ord_surcharge_desc,ord_surcharge_total,ord_reward_voucher_desc,ord_reward_voucher_total,ord_tax_rate,ord_tax_total,ord_sub_total,ord_total,ord_total_rows,ord_total_items,ord_total_weight,ord_total_reward_points,ord_currency,ord_exchange_rate,ord_status,ord_date',
		'update' => 'ord_cart_data_fk,ord_user_fk,ord_item_summary_total,ord_item_summary_savings_total,ord_shipping,ord_shipping_total,ord_item_shipping_total,ord_summary_discount_desc,ord_summary_savings_total,ord_savings_total,ord_surcharge_desc,ord_surcharge_total,ord_reward_voucher_desc,ord_reward_voucher_total,ord_tax_rate,ord_tax_total,ord_sub_total,ord_total,ord_total_rows,ord_total_items,ord_total_weight,ord_total_reward_points,ord_currency,ord_exchange_rate,ord_status,ord_date',
	];
} /* end class */
