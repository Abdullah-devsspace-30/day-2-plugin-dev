<?php
/**
 * Plugin Name : Plugin Skeleton
 * Description : This is assignment of day 2
 * Version : 1.1
 * Author : Muhammad Abdullah Baig
 * License: GPL2

 */

function add_some_text(){
    echo "
    <p style='color:blue;font-size:16px;text-align:center;padding:20px'>
    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.


    </p>
    ";
}

add_action('wp_body_open','add_some_text');
 function activate_plugin(){
    add_option('activate_plugin',true);
 }

 function deactive_plugin(){
    delete_option('deactive_plugin');
 }

 register_activation_hook( __FILE__, 'activate_plugin');
 register_deactivation_hook( __FILE__,'deactive_plugin');
?>