<?php
/**
 * Plugin Name: Navbar Plugin
 * Description: This is my custom navbar plugin
 * Version: 1.0
 * Author: Muhammad Abdullah Baig
 */

// Custom Navbar Function
function custom_navbar() {
    echo "
    <nav style='display: flex; justify-content: space-between; align-items: center; padding: 20px; background-color: #333; color: #fff;'>
        <h3 style='font-size: 16px; color: #fff;'>Devsspace</h3>
        <div style='display: flex; padding-right: 5px; padding-left: 5px;'>
            <ul style='list-style-type: none; margin: 0; padding: 0; display: flex;'>
                <li style='margin-right: 20px;'><a href='#' style='color: #fff; text-decoration: none;'>Home</a></li>
                <li style='margin-right: 20px;'><a href='#' style='color: #fff; text-decoration: none;'>About</a></li>
                <li style='margin-right: 20px;'><a href='#' style='color: #fff; text-decoration: none;'>Contact</a></li>
                <li><a href='#' style='color: #fff; text-decoration: none;'>Blog</a></li>
            </ul>
        </div>
    </nav>
    ";
}

// Hook into wp_body_open to add the navbar at the top of the page
add_action('wp_body_open', 'custom_navbar');

// Plugin Activation Hook
function activate_navbar_plugin() {
    // Optionally, add an option when the plugin is activated
    add_option('navbar_plugin_active', true);
}

// Plugin Deactivation Hook
function deactivate_navbar_plugin() {
    // Cleanup, delete options or other settings
    delete_option('navbar_plugin_active');
}

// Register activation and deactivation hooks
register_activation_hook(__FILE__, 'activate_navbar_plugin');
register_deactivation_hook(__FILE__, 'deactivate_navbar_plugin');
