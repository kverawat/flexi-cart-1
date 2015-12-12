<?php
theme::header_start('Shopping Cart Dashboard','Manage your store.');
theme::header_end();

theme::panel_start('Item Management');
theme::button('Manage Items');
theme::panel_end();

theme::panel_start('Orders');
theme::button('Manage Orders');
theme::panel_end();

theme::panel_start('Locations and Zones');
theme::button('Manage Locations');
echo '&nbsp;';
theme::button('Add New Location Type');
echo '&nbsp;';
theme::button('Manage Zones');
echo '&nbsp;';
theme::button('Add New Zone');
echo '&nbsp;';
theme::button('Location Menu Demos');
theme::panel_end();

theme::panel_start('Shipping and Taxes');
theme::button('Manage Shipping Options');
echo '&nbsp;';
theme::button('Add New Shipping Option');
echo '&nbsp;';
theme::button('Add New Item Shipping Rule');
echo '&nbsp;';
theme::button('Manage Taxes');
echo '&nbsp;';
theme::button('Add New Tax');
echo '&nbsp;';
theme::button('Add New Item Tax Rate');
theme::panel_end();

theme::panel_start('Discounts');
theme::button('Manage Item Discounts');
echo '&nbsp;';
theme::button('Manage Summary Discounts');
echo '&nbsp;';
theme::button('Add New Discount');
echo '&nbsp;';
theme::button('Manage Discount Groups');
echo '&nbsp;';
theme::button('Add New Discount Group');
theme::panel_end();

theme::panel_start('Reward Points and Vouchers');
theme::button('Manage User Reward Points');
echo '&nbsp;';
theme::button('Manage User Reward Vouchers');
theme::panel_end();

theme::panel_start('Currency, Order Status and Cart Configuration');
theme::button('Manage Currencies',['url'=>'/admin/cart/currencies']);
echo '&nbsp;';
theme::button('Manage Order Statuses',['url'=>'/admin/cart/order-status']);
echo '&nbsp;';
theme::button('Manage Cart Configuration',['url'=>'/admin/configure/setting']);
echo '&nbsp;';
theme::button('Manage Cart Defaults',['url'=>'/admin/cart/defaults']);
theme::panel_end();

 


	

