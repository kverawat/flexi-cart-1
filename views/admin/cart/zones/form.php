<?php
theme::form_start($controller_path.'/'.$controller_action);
o::hidden('lzone_id',$record->lzone_id);
theme::header_start(ucfirst($controller_action).' '.$controller_title);
theme::header_end();

o::hr(0,12); /* 4px padding top and bottom */

theme::start_form_section('Name',true,5);
o::text('lzone_name', $record->lzone_name);
theme::end_form_section();

theme::start_form_section('Exchange Rate',true,2);
o::text('lzone_description', $record->lzone_description);
theme::end_form_section();

theme::start_form_section('Enabled');
theme::checkbox('lzone_status', 1, $record->lzone_status);
theme::end_form_section();

o::hr(0,12); /* 4px padding top and bottom */

theme::footer_start();
theme::footer_cancel_button($controller_path);
theme::footer_submit_button();
theme::footer_required();
theme::footer_end();

theme::form_end();
