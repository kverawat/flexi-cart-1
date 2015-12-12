<?php

class S_Discount_columns_model extends Database_model {
	protected $table ='discount_columns';
	public $primary_key ='disc_column_id';

	protected $rules = [
		'disc_column_id' => ['field' => 'disc_column_id', 'label' => 'Disc Column Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_column' => ['field' => 'disc_column', 'label' => 'Disc Column', 'rules' => 'max_length[255]|filter_input[255]'],
	];
	protected $rule_sets = [
		'insert' => 'disc_column_id,disc_column',
		'update' => 'disc_column',
	];
} /* end class */
