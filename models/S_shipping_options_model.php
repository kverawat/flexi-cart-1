<?php

class S_Shipping_options_model extends Database_model {
	protected $table ='shipping_options';
	public $primary_key ='ship_id';

	protected $rules = [
		'ship_id' => ['field' => 'ship_id', 'label' => 'Ship Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ship_name' => ['field' => 'ship_name', 'label' => 'Ship Name', 'rules' => 'max_length[50]|filter_input[50]'],
		'ship_description' => ['field' => 'ship_description', 'label' => 'Ship Description', 'rules' => 'max_length[50]|filter_input[50]'],
		'ship_location_fk' => ['field' => 'ship_location_fk', 'label' => 'Ship Location Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ship_zone_fk' => ['field' => 'ship_zone_fk', 'label' => 'Ship Zone Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ship_inc_sub_locations' => ['field' => 'ship_inc_sub_locations', 'label' => 'Ship Inc Sub Locations', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'ship_tax_rate' => ['field' => 'ship_tax_rate', 'label' => 'Ship Tax Rate', 'rules' => 'if_empty[0]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ship_discount_inclusion' => ['field' => 'ship_discount_inclusion', 'label' => 'Ship Discount Inclusion', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'ship_status' => ['field' => 'ship_status', 'label' => 'Ship Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'ship_default' => ['field' => 'ship_default', 'label' => 'Ship Default', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'ship_id,ship_name,ship_description,ship_location_fk,ship_zone_fk,ship_inc_sub_locations,ship_tax_rate,ship_discount_inclusion,ship_status,ship_default',
		'update' => 'ship_name,ship_description,ship_location_fk,ship_zone_fk,ship_inc_sub_locations,ship_tax_rate,ship_discount_inclusion,ship_status,ship_default',
	];
} /* end class */
