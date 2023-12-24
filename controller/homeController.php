<?php

require("model/productsModel.php");

class HomeController {
    private $model;
    
    public function __construct() {
        $this->model = new ProductsModel;
    }

    public function getHomePage() {
        $product = $this->model->getLatestItem();
        include_once('view/home.php');
    }
}