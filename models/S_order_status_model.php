<?php

class S_Order_status_model extends Database_model {
	protected $table ='order_status';
	public $primary_key ='ord_status_id';

	protected $rules = [
		'ord_status_id' => ['field' => 'ord_status_id', 'label' => 'Ord Status Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ord_status_description' => ['field' => 'ord_status_description', 'label' => 'Ord Status Description', 'rules' => 'max_length[50]|filter_input[50]'],
		'ord_status_cancelled' => ['field' => 'ord_status_cancelled', 'label' => 'Ord Status Cancelled', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'ord_status_save_default' => ['field' => 'ord_status_save_default', 'label' => 'Ord Status Save Default', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'ord_status_resave_default' => ['field' => 'ord_status_resave_default', 'label' => 'Ord Status Resave Default', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'ord_status_id,ord_status_description,ord_status_cancelled,ord_status_save_default,ord_status_resave_default',
		'update' => 'ord_status_description,ord_status_cancelled,ord_status_save_default,ord_status_resave_default',
	];
} /* end class */
