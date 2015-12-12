<?php

class S_Discount_types_model extends Database_model {
	protected $table ='discount_types';
	public $primary_key ='disc_type_id';

	protected $rules = [
		'disc_type_id' => ['field' => 'disc_type_id', 'label' => 'Disc Type Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_type' => ['field' => 'disc_type', 'label' => 'Disc Type', 'rules' => 'max_length[50]|filter_input[50]'],
	];
	protected $rule_sets = [
		'insert' => 'disc_type_id,disc_type',
		'update' => 'disc_type',
	];
} /* end class */
