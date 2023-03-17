<?php

require_once("app/Model/Product.php");

class HomepageController {

    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index() 
    {
        
        if(!isset($_SESSION['user'])) {
            header("location: index.php?controller=authentication&action=showlogin&module=web");
        } else {
            
            $target_file = "public/assets/admin/img/";
            $products = $this->product->getNewProduct();
            $productPk = $this->product->getNewProductByPK();
            
            require_once("views/web/homepage/index.php");
        }
        
    }

}