<?php
class CurrenciesController extends APP_AdminController {
	public $controller = 'currencies';
	public $controller_path = '/admin/cart/currencies';
	public $controller_model  = 'S_currency_model';
	public $controller_title = 'Currency';
	public $controller_titles = 'Currencies';
	public $has_access = 'Manage Currency';
} /* end controller */