<?php

class S_Discount_tax_methods_model extends Database_model {
	protected $table ='discount_tax_methods';
	public $primary_key ='disc_tax_method_id';

	protected $rules = [
		'disc_tax_method_id' => ['field' => 'disc_tax_method_id', 'label' => 'Disc Tax Method Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_tax_method' => ['field' => 'disc_tax_method', 'label' => 'Disc Tax Method', 'rules' => 'max_length[255]|filter_input[255]'],
	];
	protected $rule_sets = [
		'insert' => 'disc_tax_method_id,disc_tax_method',
		'update' => 'disc_tax_method',
	];
} /* end class */
