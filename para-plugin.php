<?php
/**
 * Plugin Name : Hero Para
 * Description : This is a basic p tag plugin
 * Version : 1.0
 * Author : Muhammad Abdullah Baig
 * 
 */

function add_para_text(){
    echo "<p style=''>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
    </p>";
}

add_action('wp_body_open', 'add_para_text');

function activate_para_text(){  
    // Set an option when the plugin is activated
    add_option('activate_para_text', true);
}

function deactivate_para_text(){
    // Delete the option when the plugin is deactivated
    delete_option('activate_para_text');
}

register_activation_hook(__FILE__, 'activate_para_text');
register_deactivation_hook(__FILE__, 'deactivate_para_text');
?>
