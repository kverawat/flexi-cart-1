<?php

class S_Cart_data_model extends Database_model {
	protected $table ='cart_data';
	public $primary_key ='cart_data_id';

	protected $rules = [
		'cart_data_id' => ['field' => 'cart_data_id', 'label' => 'Cart Data Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'cart_data_user_fk' => ['field' => 'cart_data_user_fk', 'label' => 'Cart Data User Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'cart_data_array' => ['field' => 'cart_data_array', 'label' => 'Cart Data Array', 'rules' => 'max_length[16384]|filter_textarea[16384]'],
		'cart_data_date' => ['field' => 'cart_data_date', 'label' => 'Cart Data Date', 'rules' => 'if_empty[0000-00-00 00:00:00]|if_empty[now(Y-m-d H:i:s)]|required|max_length[24]|valid_datetime|filter_input[24]'],
		'cart_data_readonly_status' => ['field' => 'cart_data_readonly_status', 'label' => 'Cart Data Readonly Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'cart_data_id,cart_data_user_fk,cart_data_array,cart_data_date,cart_data_readonly_status',
		'update' => 'cart_data_user_fk,cart_data_array,cart_data_date,cart_data_readonly_status',
	];
} /* end class */
