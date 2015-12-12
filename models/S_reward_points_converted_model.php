<?php

class S_Reward_points_converted_model extends Database_model {
	protected $table ='reward_points_converted';
	public $primary_key ='rew_convert_id';

	protected $rules = [
		'rew_convert_id' => ['field' => 'rew_convert_id', 'label' => 'Rew Convert Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'rew_convert_ord_detail_fk' => ['field' => 'rew_convert_ord_detail_fk', 'label' => 'Rew Convert Ord Detail Fk', 'rules' => 'if_empty[10]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'rew_convert_discount_fk' => ['field' => 'rew_convert_discount_fk', 'label' => 'Rew Convert Discount Fk', 'rules' => 'max_length[50]|filter_input[50]'],
		'rew_convert_points' => ['field' => 'rew_convert_points', 'label' => 'Rew Convert Points', 'rules' => 'if_empty[10]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'rew_convert_date' => ['field' => 'rew_convert_date', 'label' => 'Rew Convert Date', 'rules' => 'if_empty[0000-00-00 00:00:00]|if_empty[now(Y-m-d H:i:s)]|required|max_length[24]|valid_datetime|filter_input[24]'],
	];
	protected $rule_sets = [
		'insert' => 'rew_convert_id,rew_convert_ord_detail_fk,rew_convert_discount_fk,rew_convert_points,rew_convert_date',
		'update' => 'rew_convert_ord_detail_fk,rew_convert_discount_fk,rew_convert_points,rew_convert_date',
	];
} /* end class */
