<?php

class S_Currency_model extends Database_model {
	protected $table ='currency';
	public $primary_key ='curr_id';

	protected $rules = [
		'curr_id' => ['field' => 'curr_id', 'label' => 'Id', 'rules' => 'required|if_empty[0]|integer|max_length[10]|less_than[4294967295]|filter_int[10]'],
		'curr_name' => ['field' => 'curr_name', 'label' => 'Name', 'rules' => 'required|max_length[50]|filter_input[50]'],
		'curr_exchange_rate' => ['field' => 'curr_exchange_rate', 'label' => 'Exchange Rate', 'rules' => 'required|if_empty[0.0000]|float|max_length[20]|less_than[4294967295]|filter_int[10]'],
		'curr_symbol' => ['field' => 'curr_symbol', 'label' => 'Symbol', 'rules' => 'required|max_length[25]|filter_input[25]'],
		'curr_symbol_suffix' => ['field' => 'curr_symbol_suffix', 'label' => 'Symbol Suffix', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'curr_thousand_separator' => ['field' => 'curr_thousand_separator', 'label' => 'Thousand Separator', 'rules' => 'required|max_length[10]|filter_input[10]'],
		'curr_decimal_separator' => ['field' => 'curr_decimal_separator', 'label' => 'Decimal Separator', 'rules' => 'required|max_length[10]|filter_input[10]'],
		'curr_status' => ['field' => 'curr_status', 'label' => 'Status', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
		'curr_default' => ['field' => 'curr_default', 'label' => 'Default', 'rules' => 'if_empty[0]|integer|max_length[10]|less_than[255]|filter_int[10]'],
	];
	protected $rule_sets = [
		'insert' => 'curr_id,curr_name,curr_exchange_rate,curr_symbol,curr_symbol_suffix,curr_thousand_separator,curr_decimal_separator,curr_status,curr_default',
		'update' => 'curr_name,curr_exchange_rate,curr_symbol,curr_symbol_suffix,curr_thousand_separator,curr_decimal_separator,curr_status,curr_default',
	];
} /* end class */
