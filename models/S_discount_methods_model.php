<?php

class S_Discount_methods_model extends Database_model {
	protected $table ='discount_methods';
	public $primary_key ='disc_method_id';

	protected $rules = [
		'disc_method_id' => ['field' => 'disc_method_id', 'label' => 'Disc Method Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_method_type_fk' => ['field' => 'disc_method_type_fk', 'label' => 'Disc Method Type Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_method_column_fk' => ['field' => 'disc_method_column_fk', 'label' => 'Disc Method Column Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_method_calculation_fk' => ['field' => 'disc_method_calculation_fk', 'label' => 'Disc Method Calculation Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_method' => ['field' => 'disc_method', 'label' => 'Disc Method', 'rules' => 'max_length[50]|filter_input[50]'],
	];
	protected $rule_sets = [
		'insert' => 'disc_method_id,disc_method_type_fk,disc_method_column_fk,disc_method_calculation_fk,disc_method',
		'update' => 'disc_method_type_fk,disc_method_column_fk,disc_method_calculation_fk,disc_method',
	];
} /* end class */
