<?php

class S_Location_type_model extends Database_model {
	protected $table ='location_type';
	public $primary_key ='loc_type_id';

	protected $rules = [
		'loc_type_id' => ['field' => 'loc_type_id', 'label' => 'Loc Type Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'loc_type_parent_fk' => ['field' => 'loc_type_parent_fk', 'label' => 'Loc Type Parent Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'loc_type_name' => ['field' => 'loc_type_name', 'label' => 'Loc Type Name', 'rules' => 'max_length[50]|filter_input[50]'],
	];
	protected $rule_sets = [
		'insert' => 'loc_type_id,loc_type_parent_fk,loc_type_name',
		'update' => 'loc_type_parent_fk,loc_type_name',
	];
} /* end class */
