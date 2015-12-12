<?php
theme::form_start($controller_path.'/'.$controller_action);
o::hidden('ord_status_id',$record->ord_status_id);
theme::header_start(ucfirst($controller_action).' '.$controller_title);
theme::header_end();

o::hr(0,12); /* 4px padding top and bottom */

theme::start_form_section('Name',true,5);
o::text('ord_status_description', $record->ord_status_description);
theme::end_form_section();

theme::start_form_section('On Save',2);
theme::checkbox('ord_status_save_default', 1, $record->ord_status_save_default);
theme::end_form_section();

theme::start_form_section('On Update',2);
theme::checkbox('ord_status_resave_default', 1, $record->ord_status_resave_default);
theme::end_form_section();

theme::start_form_section('Canceled',2);
theme::checkbox('ord_status_cancelled', 1, $record->ord_status_cancelled);
theme::end_form_section();

o::hr(0,12); /* 4px padding top and bottom */

theme::footer_start();
theme::footer_cancel_button($controller_path);
theme::footer_submit_button();
theme::footer_required();
theme::footer_end();

theme::form_end();
