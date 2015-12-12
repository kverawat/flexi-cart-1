<?php

class S_Tax_model extends Database_model {
	protected $table ='tax';
	public $primary_key ='tax_id';

	protected $rules = [
		'tax_id' => ['field' => 'tax_id', 'label' => 'Tax Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'tax_location_fk' => ['field' => 'tax_location_fk', 'label' => 'Tax Location Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'tax_zone_fk' => ['field' => 'tax_zone_fk', 'label' => 'Tax Zone Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'tax_name' => ['field' => 'tax_name', 'label' => 'Tax Name', 'rules' => 'max_length[25]|filter_input[25]'],
		'tax_rate' => ['field' => 'tax_rate', 'label' => 'Tax Rate', 'rules' => 'if_empty[0.0000]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'tax_status' => ['field' => 'tax_status', 'label' => 'Tax Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'tax_default' => ['field' => 'tax_default', 'label' => 'Tax Default', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'tax_id,tax_location_fk,tax_zone_fk,tax_name,tax_rate,tax_status,tax_default',
		'update' => 'tax_location_fk,tax_zone_fk,tax_name,tax_rate,tax_status,tax_default',
	];
} /* end class */
