<?php 

theme::form_start($controller_path.'/'.$controller_action);
o::hidden('curr_id',$record->curr_id);
theme::header_start(ucfirst($controller_action).' '.$controller_title);
theme::header_end();

o::hr(0,12); /* 4px padding top and bottom */

theme::start_form_section('Currency');
theme::dropdown3('currency_option',$record->currency_option,$currency_options);
theme::end_form_section();

theme::start_form_section('Shipping Location');
theme::dropdown3('currency_option',$record->currency_option,$currency_options);
theme::end_form_section();

theme::start_form_section('Shipping Option');
theme::dropdown3('currency_option',$record->currency_option,$currency_options);
theme::end_form_section();

theme::start_form_section('Tax Location');
theme::dropdown3('currency_option',$record->currency_option,$currency_options);
theme::end_form_section();

theme::start_form_section('Tax Rate');
theme::dropdown3('currency_option',$record->currency_option,$currency_options);
theme::end_form_section();

o::hr(0,12); /* 4px padding top and bottom */

theme::footer_start();
theme::footer_cancel_button($controller_path);
theme::footer_submit_button();
theme::footer_end();

theme::form_end();
