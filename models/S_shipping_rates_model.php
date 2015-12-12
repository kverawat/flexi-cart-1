<?php

class S_Shipping_rates_model extends Database_model {
	protected $table ='shipping_rates';
	public $primary_key ='ship_rate_id';

	protected $rules = [
		'ship_rate_id' => ['field' => 'ship_rate_id', 'label' => 'Ship Rate Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ship_rate_ship_fk' => ['field' => 'ship_rate_ship_fk', 'label' => 'Ship Rate Ship Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'ship_rate_value' => ['field' => 'ship_rate_value', 'label' => 'Ship Rate Value', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ship_rate_tare_wgt' => ['field' => 'ship_rate_tare_wgt', 'label' => 'Ship Rate Tare Wgt', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ship_rate_min_wgt' => ['field' => 'ship_rate_min_wgt', 'label' => 'Ship Rate Min Wgt', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ship_rate_max_wgt' => ['field' => 'ship_rate_max_wgt', 'label' => 'Ship Rate Max Wgt', 'rules' => 'if_empty[9999.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ship_rate_min_value' => ['field' => 'ship_rate_min_value', 'label' => 'Ship Rate Min Value', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ship_rate_max_value' => ['field' => 'ship_rate_max_value', 'label' => 'Ship Rate Max Value', 'rules' => 'if_empty[9999.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'ship_rate_status' => ['field' => 'ship_rate_status', 'label' => 'Ship Rate Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'ship_rate_id,ship_rate_ship_fk,ship_rate_value,ship_rate_tare_wgt,ship_rate_min_wgt,ship_rate_max_wgt,ship_rate_min_value,ship_rate_max_value,ship_rate_status',
		'update' => 'ship_rate_ship_fk,ship_rate_value,ship_rate_tare_wgt,ship_rate_min_wgt,ship_rate_max_wgt,ship_rate_min_value,ship_rate_max_value,ship_rate_status',
	];
} /* end class */
