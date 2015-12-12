<?php

class S_Discount_groups_model extends Database_model {
	protected $table ='discount_groups';
	public $primary_key ='disc_group_id';

	protected $rules = [
		'disc_group_id' => ['field' => 'disc_group_id', 'label' => 'Disc Group Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_group' => ['field' => 'disc_group', 'label' => 'Disc Group', 'rules' => 'max_length[255]|filter_input[255]'],
		'disc_group_status' => ['field' => 'disc_group_status', 'label' => 'Disc Group Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'disc_group_id,disc_group,disc_group_status',
		'update' => 'disc_group,disc_group_status',
	];
} /* end class */
