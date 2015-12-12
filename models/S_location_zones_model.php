<?php

class S_Location_zones_model extends Database_model {
	protected $table ='location_zones';
	public $primary_key ='lzone_id';

	protected $rules = [
		'lzone_id' => ['field' => 'lzone_id', 'label' => 'Lzone Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'lzone_name' => ['field' => 'lzone_name', 'label' => 'Lzone Name', 'rules' => 'max_length[50]|filter_input[50]'],
		'lzone_description' => ['field' => 'lzone_description', 'label' => 'Lzone Description', 'rules' => 'max_length[16384]|filter_textarea[16384]'],
		'lzone_status' => ['field' => 'lzone_status', 'label' => 'Lzone Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'lzone_id,lzone_name,lzone_description,lzone_status',
		'update' => 'lzone_name,lzone_description,lzone_status',
	];
} /* end class */
