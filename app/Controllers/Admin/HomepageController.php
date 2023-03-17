<?php 

class HomepageController 
{
    public function index()
    {
        if(!isset($_SESSION['admin'])) {
            header("location: index.php?controller=authentication&action=showloginAdmin&module=web");
        } else {
            require "views/admin/homepage/index.php";
        }
    }
}