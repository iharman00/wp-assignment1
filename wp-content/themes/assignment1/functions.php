<?php
// Register Main Menu
function register_main_menu()
{
    register_nav_menu('main-menu', __('Main Menu'));
}
add_action('after_setup_theme', 'register_main_menu');
