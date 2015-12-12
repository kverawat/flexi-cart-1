<?php

class S_Order_details_model extends Database_model {
	protected $table ='order_details';
	public $primary_key ='ord_det_id';

	protected $rules = [
		'ord_det_id' => ['field' => 'ord_det_id', 'label' => 'Ord Det Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ord_det_order_number_fk' => ['field' => 'ord_det_order_number_fk', 'label' => 'Ord Det Order Number Fk', 'rules' => 'max_length[25]|filter_input[25]'],
		'ord_det_cart_row_id' => ['field' => 'ord_det_cart_row_id', 'label' => 'Ord Det Cart Row Id', 'rules' => 'max_length[32]|filter_input[32]'],
		'ord_det_item_fk' => ['field' => 'ord_det_item_fk', 'label' => 'Ord Det Item Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ord_det_item_name' => ['field' => 'ord_det_item_name', 'label' => 'Ord Det Item Name', 'rules' => 'max_length[255]|filter_input[255]'],
		'ord_det_item_option' => ['field' => 'ord_det_item_option', 'label' => 'Ord Det Item Option', 'rules' => 'max_length[255]|filter_input[255]'],
		'ord_det_quantity' => ['field' => 'ord_det_quantity', 'label' => 'Ord Det Quantity', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_non_discount_quantity' => ['field' => 'ord_det_non_discount_quantity', 'label' => 'Ord Det Non Discount Quantity', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_discount_quantity' => ['field' => 'ord_det_discount_quantity', 'label' => 'Ord Det Discount Quantity', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_stock_quantity' => ['field' => 'ord_det_stock_quantity', 'label' => 'Ord Det Stock Quantity', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_price' => ['field' => 'ord_det_price', 'label' => 'Ord Det Price', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_price_total' => ['field' => 'ord_det_price_total', 'label' => 'Ord Det Price Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_discount_price' => ['field' => 'ord_det_discount_price', 'label' => 'Ord Det Discount Price', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_discount_price_total' => ['field' => 'ord_det_discount_price_total', 'label' => 'Ord Det Discount Price Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_discount_description' => ['field' => 'ord_det_discount_description', 'label' => 'Ord Det Discount Description', 'rules' => 'max_length[255]|filter_input[255]'],
		'ord_det_tax_rate' => ['field' => 'ord_det_tax_rate', 'label' => 'Ord Det Tax Rate', 'rules' => 'if_empty[0.0000]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_tax' => ['field' => 'ord_det_tax', 'label' => 'Ord Det Tax', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_tax_total' => ['field' => 'ord_det_tax_total', 'label' => 'Ord Det Tax Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_shipping_rate' => ['field' => 'ord_det_shipping_rate', 'label' => 'Ord Det Shipping Rate', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_weight' => ['field' => 'ord_det_weight', 'label' => 'Ord Det Weight', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_weight_total' => ['field' => 'ord_det_weight_total', 'label' => 'Ord Det Weight Total', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_reward_points' => ['field' => 'ord_det_reward_points', 'label' => 'Ord Det Reward Points', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ord_det_reward_points_total' => ['field' => 'ord_det_reward_points_total', 'label' => 'Ord Det Reward Points Total', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ord_det_status_message' => ['field' => 'ord_det_status_message', 'label' => 'Ord Det Status Message', 'rules' => 'max_length[255]|filter_input[255]'],
		'ord_det_quantity_shipped' => ['field' => 'ord_det_quantity_shipped', 'label' => 'Ord Det Quantity Shipped', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_quantity_cancelled' => ['field' => 'ord_det_quantity_cancelled', 'label' => 'Ord Det Quantity Cancelled', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ord_det_shipped_date' => ['field' => 'ord_det_shipped_date', 'label' => 'Ord Det Shipped Date', 'rules' => 'if_empty[0000-00-00 00:00:00]|if_empty[now(Y-m-d H:i:s)]|required|max_length[24]|valid_datetime|filter_input[24]'],
	];
	protected $rule_sets = [
		'insert' => 'ord_det_id,ord_det_order_number_fk,ord_det_cart_row_id,ord_det_item_fk,ord_det_item_name,ord_det_item_option,ord_det_quantity,ord_det_non_discount_quantity,ord_det_discount_quantity,ord_det_stock_quantity,ord_det_price,ord_det_price_total,ord_det_discount_price,ord_det_discount_price_total,ord_det_discount_description,ord_det_tax_rate,ord_det_tax,ord_det_tax_total,ord_det_shipping_rate,ord_det_weight,ord_det_weight_total,ord_det_reward_points,ord_det_reward_points_total,ord_det_status_message,ord_det_quantity_shipped,ord_det_quantity_cancelled,ord_det_shipped_date',
		'update' => 'ord_det_order_number_fk,ord_det_cart_row_id,ord_det_item_fk,ord_det_item_name,ord_det_item_option,ord_det_quantity,ord_det_non_discount_quantity,ord_det_discount_quantity,ord_det_stock_quantity,ord_det_price,ord_det_price_total,ord_det_discount_price,ord_det_discount_price_total,ord_det_discount_description,ord_det_tax_rate,ord_det_tax,ord_det_tax_total,ord_det_shipping_rate,ord_det_weight,ord_det_weight_total,ord_det_reward_points,ord_det_reward_points_total,ord_det_status_message,ord_det_quantity_shipped,ord_det_quantity_cancelled,ord_det_shipped_date',
	];
} /* end class */
