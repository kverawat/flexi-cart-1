<?php

class S_Locations_model extends Database_model {
	protected $table ='locations';
	public $primary_key ='loc_id';

	protected $rules = [
		'loc_id' => ['field' => 'loc_id', 'label' => 'Loc Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'loc_type_fk' => ['field' => 'loc_type_fk', 'label' => 'Loc Type Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'loc_parent_fk' => ['field' => 'loc_parent_fk', 'label' => 'Loc Parent Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'loc_ship_zone_fk' => ['field' => 'loc_ship_zone_fk', 'label' => 'Loc Ship Zone Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'loc_tax_zone_fk' => ['field' => 'loc_tax_zone_fk', 'label' => 'Loc Tax Zone Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'loc_name' => ['field' => 'loc_name', 'label' => 'Loc Name', 'rules' => 'max_length[50]|filter_input[50]'],
		'loc_status' => ['field' => 'loc_status', 'label' => 'Loc Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'loc_ship_default' => ['field' => 'loc_ship_default', 'label' => 'Loc Ship Default', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'loc_tax_default' => ['field' => 'loc_tax_default', 'label' => 'Loc Tax Default', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'loc_id,loc_type_fk,loc_parent_fk,loc_ship_zone_fk,loc_tax_zone_fk,loc_name,loc_status,loc_ship_default,loc_tax_default',
		'update' => 'loc_type_fk,loc_parent_fk,loc_ship_zone_fk,loc_tax_zone_fk,loc_name,loc_status,loc_ship_default,loc_tax_default',
	];
} /* end class */
