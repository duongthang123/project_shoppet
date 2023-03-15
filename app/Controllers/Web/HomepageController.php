<?php


class HomepageController {

    public function index() 
    {
        
        if(!isset($_SESSION['user'])) {
            header("location: index.php?controller=authentication&action=showlogin&module=web");
        } else {
            require_once("views/web/homepage/index.php");
        }
        
    }

}