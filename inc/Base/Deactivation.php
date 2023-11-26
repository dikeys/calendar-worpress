<?php 

namespace Inc\Base;

class Deactivation{

    public static function deactivation(){
        flush_rewrite_rules();
    } 
}