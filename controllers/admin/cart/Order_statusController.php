<?php 

class order_statusController extends Flexi_cartController {
	public $controller        = 'order_status';
	public $controller_path   = '/admin/cart/order-status';
	public $controller_title  = 'Order Status';
	public $controller_titles = 'Order Statues';
	public $has_access				= 'Manage Order Status';

	/* add rules directly on controller since the models are 3rd party */
	public $rules = [
		'ord_status_id' => ['field' => 'ord_status_id','label' => 'Id','rules' => 'required|integer|max_length[10]|less_than[32767]|filter_int[5]'],
		'ord_status_description' => ['field' => 'ord_status_description','label' => 'Name','rules' => 'required|max_length[50]|filter_input[50]'],
		'ord_status_cancelled' => ['field' => 'ord_status_cancelled','label' => 'Canceled','rules' => 'if_empty[0]|one_of[0,1]|filter_int[1]|max_length[1]'],
		'ord_status_save_default' => ['field' => 'ord_status_save_default','label' => 'Save Default','rules' => 'if_empty[0]|one_of[0,1]|filter_int[1]|max_length[1]'],
		'ord_status_resave_default' => ['field' => 'ord_status_resave_default','label' => 'Resave Default','rules' => 'if_empty[0]|one_of[0,1]|filter_int[1]|max_length[1]'],
	];
	public $rule_sets = [
		'insert' => 'ord_status_description,ord_status_cancelled,ord_status_save_default,ord_status_resave_default',
		'update' => 'ord_status_id,ord_status_description,ord_status_cancelled,ord_status_save_default,ord_status_resave_default',
	];
	
	/* stuff for Flexi_cartController */
	public $primary_key = 'ord_status_id';
	public $object = 'flexi_cart_admin';
	public $index_method = 'get_db_order_status_query';
	public $new_method = 'insert_db_order_status';
	public $edit_method = 'update_db_order_status';
	public $delete_method = 'delete_db_order_status';

} /* end controller */