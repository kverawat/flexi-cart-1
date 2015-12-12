<?php
$this->add_access_n_menu('Manage Cart','Manage Shopping Cart','Cart','Content','/admin/cart/dashboard');

$access_id = $this->add_access('Cart','Cart Full Access');

$root_menu_id = $this->add_menu('/#','Cart',0,$access_id,9999);

$this->add_menu('/admin/cart/items','Items',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/orders','Orders',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/currencies','Currency',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/order-status','Order Status',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/locations','Locations',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/zones','Zones',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/shipping-options','Shipping Options',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/shipping-rules','Shipping Rules',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/taxes','Taxes',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/discounts','Discounts',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/discount-groups','Discount Groups',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/reward-points','Reward Points',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/reward-vouchers','Reward Vouchers',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/currencies','Currency',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/order-status','Order Statuses',$root_menu_id,$access_id);
$this->add_menu('/admin/cart/defaults','Defaults',$root_menu_id,$access_id);

//add_setting($name,$value,$group,$help='',$type=0,$options='',$module=null,$extra=[])

/* Orders */
$this->add_setting('Order Number Prefix','',$this->name,'Set a prefix value to the cart order number.',3,2,$this->name,['is_deletable'=>0]);
$this->add_setting('Order Number Suffix','',$this->name,'Set a suffix value to the cart order number.',3,2,$this->name,['is_deletable'=>0]);
$this->add_setting('Increment Order Number','true',$this->name,'Should the cart order number be incremented from the last order number, or should it be a randomly generated number?',1,null,$this->name,['is_deletable'=>0]);
$this->add_setting('Minimum Order Value',0,$this->name,'What is the minimum order value? This value can then be checked against a particular summary column.',3,1,$this->name,['is_deletable'=>0]);

/* Quantities / Stock */
$this->add_setting('Quantity Decimals',0,$this->name,'How many decimals are acceptable for items quantities?',3,1,$this->name,['is_deletable'=>0]);
$this->add_setting('Increment Duplicate Quantities','true',$this->name,'Should an items quantity be incremented when an identical duplicate is added to the cart?',1,null,$this->name,['is_deletable'=>0]);
$this->add_setting('Quantity Limited by Stock','true',$this->name,'Should the maximum quantity of cart items be limited to the databases item stock quantity?',1,null,$this->name,['is_deletable'=>0]);
$this->add_setting('Remove Out-of-Stock Items','true',$this->name,'Should out-of-stock items be automatically removed from the cart?',1,null,$this->name,['is_deletable'=>0]);
$this->add_setting('Auto Allocate Item Stock','true',$this->name,'Should stock quantities be automatically updated and managed by flexi cart?',1,null,$this->name,['is_deletable'=>0]);
$this->add_setting('Save Banned Shipping Items','true',$this->name,'If an item is not permitted to be shipped to the current shipping location, yet the user still completes the order, should the item details be saved to the database?',1,null,$this->name,['is_deletable'=>0]);
$this->add_setting('Multi Row Duplicate Items','true',$this->name,'Should all duplicate cart items be added as a new separate row in the cart?',1,null,$this->name,['is_deletable'=>0]);

/* weight */
$this->add_setting('Weight Type','grams',$this->name,'Set the default weight to display item weights as.',3,2,$this->name,['is_deletable'=>0]);
$this->add_setting('Weight Decimals',0,$this->name,'Set the default number of decimals points to display item weights by.',3,1,$this->name,['is_deletable'=>0]);

/* tax */
$this->add_setting('Display Tax Prices','true',$this->name,'Should item prices be displayed including tax by default?',1,null,$this->name,['is_deletable'=>0]);
$this->add_setting('Prices Include Tax','true',$this->name,'Do item prices typically include tax when added to the cart?',1,null,$this->name,['is_deletable'=>0]);

/* Reward Points / Vouchers */
$this->add_setting('Dynamic Reward Points','true',$this->name,'Should reward points be based on the internal value of an item, or should it be based on the items current tax rate based price?',1,null,$this->name,['is_deletable'=>0]);
$this->add_setting('Reward Point Multiplier',10,$this->name,'How many reward points are awarded per 1.00 currency unit of an items price?',3,1,$this->name,['is_deletable'=>0]);
$this->add_setting('Reward Voucher Multiplier','0.01',$this->name,'How much is each reward point worth as a currency value when converted to a reward voucher?',3,1,$this->name,['is_deletable'=>0]);
$this->add_setting('Reward Point to Voucher Ratio',250,$this->name,'How many reward points are required to create 1 reward voucher?',3,1,$this->name,['is_deletable'=>0]);
$this->add_setting('Days Reward Point Pending',14,$this->name,'Once an item order has been set as \'Completed\' (i.e. shipped to customer), after how many days should reward points earnt from the item become active?',3,2,$this->name,['is_deletable'=>0]);
$this->add_setting('Days Reward Point Valid',365,$this->name,'How many days are reward points valid for?',3,1,$this->name,['is_deletable'=>0]);
$this->add_setting('Days Reward Voucher Valid',365,$this->name,'How many days are reward vouchers valid for?',3,1,$this->name,['is_deletable'=>0]);

/* Custom Statuses */
$this->add_setting('Custom Status 1','',$this->name,'individual custom cart status 1 can be set to affect whether discounts become active.',3,null,$this->name,['is_deletable'=>0]);
$this->add_setting('Custom Status 2','',$this->name,'individual custom cart status 1 can be set to affect whether discounts become active.',3,null,$this->name,['is_deletable'=>0]);
$this->add_setting('Custom Status 3','',$this->name,'individual custom cart status 1 can be set to affect whether discounts become active.',3,null,$this->name,['is_deletable'=>0]);		

return true;
