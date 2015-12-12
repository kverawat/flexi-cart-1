<?php

class S_Discounts_model extends Database_model {
	protected $table ='discounts';
	public $primary_key ='disc_id';

	protected $rules = [
		'disc_id' => ['field' => 'disc_id', 'label' => 'Disc Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_type_fk' => ['field' => 'disc_type_fk', 'label' => 'Disc Type Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_method_fk' => ['field' => 'disc_method_fk', 'label' => 'Disc Method Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_tax_method_fk' => ['field' => 'disc_tax_method_fk', 'label' => 'Disc Tax Method Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'disc_user_acc_fk' => ['field' => 'disc_user_acc_fk', 'label' => 'Disc User Acc Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_item_fk' => ['field' => 'disc_item_fk', 'label' => 'Disc Item Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_group_fk' => ['field' => 'disc_group_fk', 'label' => 'Disc Group Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_location_fk' => ['field' => 'disc_location_fk', 'label' => 'Disc Location Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_zone_fk' => ['field' => 'disc_zone_fk', 'label' => 'Disc Zone Fk', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_code' => ['field' => 'disc_code', 'label' => 'Disc Code', 'rules' => 'max_length[50]|filter_input[50]'],
		'disc_description' => ['field' => 'disc_description', 'label' => 'Disc Description', 'rules' => 'max_length[255]|filter_input[255]'],
		'disc_quantity_required' => ['field' => 'disc_quantity_required', 'label' => 'Disc Quantity Required', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_quantity_discounted' => ['field' => 'disc_quantity_discounted', 'label' => 'Disc Quantity Discounted', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_value_required' => ['field' => 'disc_value_required', 'label' => 'Disc Value Required', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'disc_value_discounted' => ['field' => 'disc_value_discounted', 'label' => 'Disc Value Discounted', 'rules' => 'if_empty[0.00]|integer|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'disc_recursive' => ['field' => 'disc_recursive', 'label' => 'Disc Recursive', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'disc_non_combinable_discount' => ['field' => 'disc_non_combinable_discount', 'label' => 'Disc Non Combinable Discount', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'disc_void_reward_points' => ['field' => 'disc_void_reward_points', 'label' => 'Disc Void Reward Points', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'disc_force_ship_discount' => ['field' => 'disc_force_ship_discount', 'label' => 'Disc Force Ship Discount', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'disc_custom_status_1' => ['field' => 'disc_custom_status_1', 'label' => 'Disc Custom Status 1', 'rules' => 'max_length[50]|filter_input[50]'],
		'disc_custom_status_2' => ['field' => 'disc_custom_status_2', 'label' => 'Disc Custom Status 2', 'rules' => 'max_length[50]|filter_input[50]'],
		'disc_custom_status_3' => ['field' => 'disc_custom_status_3', 'label' => 'Disc Custom Status 3', 'rules' => 'max_length[50]|filter_input[50]'],
		'disc_usage_limit' => ['field' => 'disc_usage_limit', 'label' => 'Disc Usage Limit', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'disc_valid_date' => ['field' => 'disc_valid_date', 'label' => 'Disc Valid Date', 'rules' => 'if_empty[0000-00-00 00:00:00]|if_empty[now(Y-m-d H:i:s)]|required|max_length[24]|valid_datetime|filter_input[24]'],
		'disc_expire_date' => ['field' => 'disc_expire_date', 'label' => 'Disc Expire Date', 'rules' => 'if_empty[0000-00-00 00:00:00]|if_empty[now(Y-m-d H:i:s)]|required|max_length[24]|valid_datetime|filter_input[24]'],
		'disc_status' => ['field' => 'disc_status', 'label' => 'Disc Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'disc_order_by' => ['field' => 'disc_order_by', 'label' => 'Disc Order By', 'rules' => 'if_empty[100]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'disc_id,disc_type_fk,disc_method_fk,disc_tax_method_fk,disc_user_acc_fk,disc_item_fk,disc_group_fk,disc_location_fk,disc_zone_fk,disc_code,disc_description,disc_quantity_required,disc_quantity_discounted,disc_value_required,disc_value_discounted,disc_recursive,disc_non_combinable_discount,disc_void_reward_points,disc_force_ship_discount,disc_custom_status_1,disc_custom_status_2,disc_custom_status_3,disc_usage_limit,disc_valid_date,disc_expire_date,disc_status,disc_order_by',
		'update' => 'disc_type_fk,disc_method_fk,disc_tax_method_fk,disc_user_acc_fk,disc_item_fk,disc_group_fk,disc_location_fk,disc_zone_fk,disc_code,disc_description,disc_quantity_required,disc_quantity_discounted,disc_value_required,disc_value_discounted,disc_recursive,disc_non_combinable_discount,disc_void_reward_points,disc_force_ship_discount,disc_custom_status_1,disc_custom_status_2,disc_custom_status_3,disc_usage_limit,disc_valid_date,disc_expire_date,disc_status,disc_order_by',
	];
} /* end class */
