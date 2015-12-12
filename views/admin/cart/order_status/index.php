<?php
theme::header_start('Manage Order Statues');
theme::header_button_new();
theme::header_end();

theme::table_start(['Name','On New'=>'txt-ac','On Update'=>'txt-ac','Cancel'=>'txt-ac','Actions'=>'txt-ac'],null,$records);

foreach ($records as $record) {
	$record->id = $record->ord_status_id;

	theme::table_start_tr();
	o::e($record->ord_status_description);

	theme::table_row('txt-ac larger');
	theme::enum_icon($record->ord_status_save_default);

	theme::table_row('txt-ac larger');
	theme::enum_icon($record->ord_status_resave_default);

	theme::table_row('txt-ac larger');
	theme::enum_icon($record->ord_status_cancelled);

	theme::table_row('actions txt-ac');

	theme::table_action('edit',$this->controller_path.'/edit/'.$record->ord_status_id);
	o_dialog::confirm_a_delete($this->controller_path.'/delete/'.$record->ord_status_id);

	theme::table_end_tr();
}

theme::table_end();

theme::return_to_top();
