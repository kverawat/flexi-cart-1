<?php

class Flexi_cartController extends APP_AdminController {
	public $validation_rules;

	public function indexAction() {
		$records = $this->{$this->object}->{$this->index_method}()->result();

		$this->page
			->data('records',$records)
			->build();
	}

	public function newAction() {
		$data = [$this->primary_key=>-1,'controller_action'=>'new'];

		$this->page
			->data($data)
			->build($this->controller_path.'/form');
	}

	public function newPostAction() {
		$this->flexi_get('insert');

		if ($this->validate->multiple($this->validation_rules,$this->data)) {
			$this->{$this->object}->{$this->new_method}($this->data);
			$this->wallet->created($this->content_title,$this->controller_path);
		}

		$this->wallet->failed($this->content_title,$this->controller_path);
	}

	public function editAction($id = null) {
		$this->input->is_valid('is_a_primary', $id);

		$record = $this->{$this->object}->{$this->index_method}(true,$id)->result()[0];

		$data = ['record'=>$record,'controller_action'=>'edit'];

		$this->page
			->data($data)
			->build($this->controller_path.'/form');
	}

	public function editPostAction() {
		$this->flexi_get('update');

		if ($this->validate->multiple($this->validation_rules,$this->data)) {
			/* grab id and clear for update */
			$id = $this->data[$this->primary_key];
			unset($this->data[$this->primary_key]);
			$this->{$this->object}->{$this->edit_method}($this->data,$id);
			$this->wallet->created($this->content_title,$this->controller_path);
		}

		$this->wallet->failed($this->content_title,$this->controller_path);
	}

	public function deleteAction($id = null) {
		$this->input->is_valid('is_a_primary', $id);

		$success = $this->{$this->object}->{$this->delete_method}($id);

		$this->output->json('err',(bool)!$success);
	}	

	public function flexi_get($which_data,$which_rule=null) {
		$which_rule = ($which_rule) ? $which_rule : $which_data;

		$this->flexi_get_data($which_data);
		$this->flexi_get_rules($which_rule);
	}

	public function flexi_get_rules($which = null) {
		$this->validation_rules = [];

		$fields = explode(',',$this->rule_sets[$which]);

		foreach ($fields as $field) {
			$this->validation_rules[$field] = $this->rules[$field];
		}

		return $this->validation_rules;
	}

	public function flexi_get_data($which = null) {
		$fields = explode(',',$this->rule_sets[$which]);

		foreach ($fields as $field) {
			$this->data[$field] = $this->input->post($field);
		}

		return $this->data;
	}
	
	public function newValidatePostAction() {
		$this->flexi_get('insert');

		if ($this->validate->multiple($this->validation_rules,$this->data)) {
			$json = json_encode(['err' => false,'errors' => '','errors_array' => '']);
		} else {
			$json = $this->validate->errors_json();		
		}

		$this->output->json($json);
	}

	public function editValidatePostAction() {
		$this->flexi_get('update');
		
		if ($this->validate->multiple($this->validation_rules,$this->data)) {
			$json = json_encode(['err' => false,'errors' => '','errors_array' => '']);
		} else {
			$json = $this->validate->errors_json();		
		}

		$this->output->json($json);
	}

} /* end controller */