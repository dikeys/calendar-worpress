<?php
namespace Inc\Pages;

class Admin {

    public function __construct() {
       
    }

    public function register() {
        add_action('admin_menu', array( $this,"add_admin_page") );
    }
    public function add_admin_page() {

        add_menu_page('Calendar reservation', 'My calendar','manage_options','calendar_reservation', array( $this,'admin_index' ), 'dashicons-calendar',110 );
    }


    public function admin_index() {
        require_once PLUGIN_ROOT_PATH .'/templates/admin/index.php';
    }
   
}