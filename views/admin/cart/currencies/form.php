<?php
theme::form_start($controller_path.'/'.$controller_action);
o::hidden('curr_id',$record->curr_id);
theme::header_start(ucfirst($controller_action).' '.$controller_title);
theme::header_end();

o::hr(0,12); /* 4px padding top and bottom */

theme::start_form_section('Name',true,5);
o::text('curr_name', $record->curr_name);
theme::end_form_section();

theme::start_form_section('Exchange Rate',true,2);
o::text('curr_exchange_rate', $record->curr_exchange_rate);
theme::end_form_section();

theme::start_form_section('Symbol HTML',true,2);
o::text('curr_symbol', $record->curr_symbol);
theme::end_form_section();

theme::start_form_section('Suffix',2);
theme::checkbox('curr_symbol_suffix', 1, $record->curr_symbol_suffix);
theme::end_form_section();

theme::start_form_section('Thousand',true,2);
o::text('curr_thousand_separator', $record->curr_thousand_separator);
theme::end_form_section();

theme::start_form_section('Decimal',true,2);
o::text('curr_decimal_separator', $record->curr_decimal_separator);
theme::end_form_section();

theme::start_form_section('Enabled');
theme::checkbox('curr_status', 1, $record->curr_status);
theme::end_form_section();

o::hr(0,12); /* 4px padding top and bottom */

theme::footer_start();
theme::footer_cancel_button($controller_path);
theme::footer_submit_button();
theme::footer_required();
theme::footer_end();

theme::form_end();
