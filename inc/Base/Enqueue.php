<?php
 
namespace Inc\Base;

class Enqueue{
    public function register(){
        add_action("admin_enqueue_scripts", [$this,'enqueue'] );
    }

    public function enqueue(){
    
    wp_enqueue_style('calendar-reservation', PLUGIN_URL .'assets/css/calendar-reservation.css');
    wp_enqueue_script('calendar-reservation', PLUGIN_URL.'assets/css/calendar-reservation.js');
    
    }
}