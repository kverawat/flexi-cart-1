<?php
theme::header_start('Manage Currencies','Manage your stores currency.');
theme::header_button_new();
theme::header_end();

theme::table_start(['Name','Exchange Rate','Symbol'=>'text-center','Suffix'=>'text-center','Thousand'=>'text-center','Decimal'=>'text-center','Status'=>'text-center','Actions'=>'text-center'],null,$records);

foreach ($records as $record) {
	theme::table_start_tr();
	o::e($record->curr_name);

	theme::table_row();
	o::shorten($record->curr_exchange_rate);

	theme::table_row('text-center');
	o::shorten($record->curr_symbol);

	theme::table_row('text-center larger');
	theme::enum_icon($record->curr_symbol_suffix);

	theme::table_row('text-center');
	o::shorten($record->curr_thousand_separator);

	theme::table_row('text-center');
	o::shorten($record->curr_decimal_separator);

	theme::table_row('text-center larger');
	theme::enum_icon($record->curr_status);

	theme::table_row('actions text-center');

	theme::table_action('edit',$this->controller_path.'/edit/'.$record->curr_id);
	o_dialog::confirm_a_delete($this->controller_path.'/delete/'.$record->curr_id);

	theme::table_end_tr();
}

theme::table_end();

theme::return_to_top();
