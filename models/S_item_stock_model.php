<?php

class S_Item_stock_model extends Database_model {
	protected $table ='item_stock';
	public $primary_key ='stock_id';

	protected $rules = [
		'stock_id' => ['field' => 'stock_id', 'label' => 'Stock Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'stock_item_fk' => ['field' => 'stock_item_fk', 'label' => 'Stock Item Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'stock_quantity' => ['field' => 'stock_quantity', 'label' => 'Stock Quantity', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'stock_auto_allocate_status' => ['field' => 'stock_auto_allocate_status', 'label' => 'Stock Auto Allocate Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'stock_id,stock_item_fk,stock_quantity,stock_auto_allocate_status',
		'update' => 'stock_item_fk,stock_quantity,stock_auto_allocate_status',
	];
} /* end class */
