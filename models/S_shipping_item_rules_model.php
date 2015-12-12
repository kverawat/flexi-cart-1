<?php

class S_Shipping_item_rules_model extends Database_model {
	protected $table ='shipping_item_rules';
	public $primary_key ='ship_item_id';

	protected $rules = [
		'ship_item_id' => ['field' => 'ship_item_id', 'label' => 'Ship Item Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ship_item_item_fk' => ['field' => 'ship_item_item_fk', 'label' => 'Ship Item Item Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ship_item_location_fk' => ['field' => 'ship_item_location_fk', 'label' => 'Ship Item Location Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ship_item_zone_fk' => ['field' => 'ship_item_zone_fk', 'label' => 'Ship Item Zone Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ship_item_value' => ['field' => 'ship_item_value', 'label' => 'Ship Item Value', 'rules' => 'if_empty[0]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ship_item_separate' => ['field' => 'ship_item_separate', 'label' => 'Ship Item Separate', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'ship_item_banned' => ['field' => 'ship_item_banned', 'label' => 'Ship Item Banned', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'ship_item_status' => ['field' => 'ship_item_status', 'label' => 'Ship Item Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'ship_item_id,ship_item_item_fk,ship_item_location_fk,ship_item_zone_fk,ship_item_value,ship_item_separate,ship_item_banned,ship_item_status',
		'update' => 'ship_item_item_fk,ship_item_location_fk,ship_item_zone_fk,ship_item_value,ship_item_separate,ship_item_banned,ship_item_status',
	];
} /* end class */
