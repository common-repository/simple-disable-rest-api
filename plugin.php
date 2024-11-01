<?php

/*
   Plugin Name: Simple Disable Rest API
   Description: A plugin to disable the rest API Completely.
   Version: 0.1
   License: GPLv3
   */




/**
 * Class for Wrapping Plugin Functions
 */
class Simple_Disable_Api_Plugin {


    public function disable_api() {
        die('REST API is Disabled.');
    }

}




//Setup the Necessary Hooks
if (class_exists('Simple_Disable_Api_Plugin')) {
    // Start the class on priority 0 to avoid adding priority inside the class as default = 10
    add_action('rest_api_init', array('Simple_Disable_Api_Plugin', 'disable_api'), 0);
    
}
