<?php
/**
 * Plugin Name : Plugin Skeleton
 * Description : This is assignment of day 2
 * Version : 1.0
 * Author : Muhammad Abdullah Baig
 * License: GPL2

 */



 function activate_plugin(){
    add_option('activate_plugin',true);
 }

 function deactive_plugin(){
    delete_option('deactive_plugin');
 }

 register_activation_hook( __FILE__, 'activate_plugin');
 register_deactivation_hook( __FILE__,'deactive_plugin');
?>