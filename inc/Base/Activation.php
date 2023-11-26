<?php 

namespace Inc\Base;

class Activation{

    public static function activation(){
        flush_rewrite_rules();
    } 
}