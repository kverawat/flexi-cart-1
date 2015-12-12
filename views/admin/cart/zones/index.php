<?php
theme::header_start('Manage Zones');
theme::header_button_new();
theme::header_end();

theme::table_start(['Name','Description','Active'=>'txt-ac','Actions'=>'txt-ac'],null,$records);

foreach ($records as $record) {
	$record->id = $record->lzone_id;

	theme::table_start_tr();
	o::e($record->lzone_name);

	theme::table_row();
	o::shorten($record->lzone_description);

	theme::table_row('txt-ac larger');
	theme::enum_icon($record->lzone_status);

	theme::table_row('actions txt-ac');

	theme::table_action('edit',$this->controller_path.'/edit/'.$record->lzone_id);
	o_dialog::confirm_a_delete($this->controller_path.'/delete/'.$record->lzone_id);

	theme::table_end_tr();
}

theme::table_end();

theme::return_to_top();
