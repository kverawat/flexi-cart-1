<?php

class S_Tax_item_rates_model extends Database_model {
	protected $table ='tax_item_rates';
	public $primary_key ='tax_item_id';

	protected $rules = [
		'tax_item_id' => ['field' => 'tax_item_id', 'label' => 'Tax Item Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'tax_item_item_fk' => ['field' => 'tax_item_item_fk', 'label' => 'Tax Item Item Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'tax_item_location_fk' => ['field' => 'tax_item_location_fk', 'label' => 'Tax Item Location Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'tax_item_zone_fk' => ['field' => 'tax_item_zone_fk', 'label' => 'Tax Item Zone Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'tax_item_rate' => ['field' => 'tax_item_rate', 'label' => 'Tax Item Rate', 'rules' => 'if_empty[0.0000]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'tax_item_status' => ['field' => 'tax_item_status', 'label' => 'Tax Item Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'tax_item_id,tax_item_item_fk,tax_item_location_fk,tax_item_zone_fk,tax_item_rate,tax_item_status',
		'update' => 'tax_item_item_fk,tax_item_location_fk,tax_item_zone_fk,tax_item_rate,tax_item_status',
	];
} /* end class */
