<?php

/* load our models */
ci()->load->model(['flexi_cart_lite_model','flexi_cart_admin_model','flexi_cart_model']);

/* load our libraries */
ci()->load->library(['Flexi_cart_lite','Flexi_cart_admin','Flexi_cart']);

ci()->event->register('database.orange_settings.after.update',function(&$method,&$data,&$result) {
	if ($result === true && $data['internal'] == 'packages/flexi-cart') {
		/* save it in the flexi cart table for now... */
		ci()->load->model('s_cart_config_model');

		ci()->s_cart_config_model->save($data['name'],$data['value']);
	}
});
