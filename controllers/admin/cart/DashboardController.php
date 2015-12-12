<?php 

class DashboardController extends APP_AdminController {
	public $controller        = 'Dashboard';
	public $controller_path   = '/admin/cart/dashboard';
	public $controller_title  = 'Dashboard';
	public $controller_titles = 'Dashboards';
	public $has_access				= 'Manage Cart';
	
	public function indexAction() {
		$this->page->build();
	}
	
} /* end controller */