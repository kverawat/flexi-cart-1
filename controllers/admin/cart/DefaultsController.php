<?php 

class DefaultsController extends Flexi_cartController {
	public $controller        = 'default';
	public $controller_path   = '/admin/cart/defaults';
	public $controller_title  = 'Default';
	public $controller_titles = 'Defaults';
	public $has_access				= 'Manage Cart Defaults';

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
	
	public function indexAction() {
		$currency = ci()->flexi_cart_admin->get_db_currency_query()->result();

		foreach ($currency as $c) {
			$currency_options[$c->curr_id] = $c->curr_name;
		}

		$data = [
			'record'=>$record,
			'controller_action'=>'edit',
			'currency_options'=>$currency_options,
		];

		$this->page
			->data($data)
			->build();
	}

	public function editPostAction() {
		$this->flexi_get('update');

		if ($this->validate->multiple($this->validation_rules,$this->data)) {

			die('special insert');

			$this->wallet->created($this->content_title,$this->controller_path);
		}

		$this->wallet->failed($this->content_title,$this->controller_path);
	}
	
	
} /* end controller */