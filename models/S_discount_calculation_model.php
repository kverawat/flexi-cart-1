<?php

class S_Discount_calculation_model extends Database_model {
	protected $table ='discount_calculation';
	public $primary_key ='disc_calculation_id';

	protected $rules = [
		'disc_calculation_id' => ['field' => 'disc_calculation_id', 'label' => 'Disc Calculation Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_calculation' => ['field' => 'disc_calculation', 'label' => 'Disc Calculation', 'rules' => 'max_length[255]|filter_input[255]'],
	];
	protected $rule_sets = [
		'insert' => 'disc_calculation_id,disc_calculation',
		'update' => 'disc_calculation',
	];
} /* end class */
