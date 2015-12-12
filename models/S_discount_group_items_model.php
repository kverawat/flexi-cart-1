<?php

class S_Discount_group_items_model extends Database_model {
	protected $table ='discount_group_items';
	public $primary_key ='disc_group_item_id';

	protected $rules = [
		'disc_group_item_id' => ['field' => 'disc_group_item_id', 'label' => 'Disc Group Item Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_group_item_group_fk' => ['field' => 'disc_group_item_group_fk', 'label' => 'Disc Group Item Group Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_group_item_item_fk' => ['field' => 'disc_group_item_item_fk', 'label' => 'Disc Group Item Item Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'disc_group_item_id,disc_group_item_group_fk,disc_group_item_item_fk',
		'update' => 'disc_group_item_group_fk,disc_group_item_item_fk',
	];
} /* end class */
