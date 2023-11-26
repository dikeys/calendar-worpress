<?php 

namespace Inc\Base;


class AddPages{

    public array $admin_pages = [] ;


    public function register(){
        
    }


    public function addPages(array $pages){
        $this->admin_pages = $pages;

        return $this;
    }


}