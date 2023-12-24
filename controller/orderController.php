<?php

require("model/productsModel.php");

class OrderController {
    private $model;
    
    public function __construct() {
        $this->model = new ProductsModel;
    }

    public function getOrderPage() {
        $products = $this->model->getProducts();
        include_once('view/order.php');
    }
}