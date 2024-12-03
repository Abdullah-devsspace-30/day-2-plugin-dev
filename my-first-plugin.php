<?php

/**
 * Plugin Name: My First Plugin
 * Description: This is my First Plugin in WordPress
 * Version: 1.0
 * Author: Muhammad Abdullah Baig
 */

// Code to execute when the plugin is activated
function basic_footer() {
    echo "
    <footer style='display: flex; justify-content: space-between; align-items: center;padding:10px'>
        <p>Company Logo</p>
        <div>
            <ul>
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
            </ul>
        </div>
    </footer>
    ";
}

// Add to WordPress footer hook
add_action('wp_footer', 'basic_footer');

// Activation function
function activate_footer_plugin() {
    add_option('activate_footer_plugin', true);
}

// Deactivation function
function deactivate_footer_plugin() {
    delete_option('activate_footer_plugin');
}

// Register activation and deactivation hooks
register_activation_hook(__FILE__, 'activate_footer_plugin');
register_deactivation_hook(__FILE__, 'deactivate_footer_plugin');

?>
