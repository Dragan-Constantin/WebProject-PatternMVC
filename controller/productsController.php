<?php

require("model/productsModel.php");

class ProductsController {
    private $model;

    public function __construct() {
        $this->model = new ProductsModel;
    }

    public function getProductsPage() {
        $products = $this->model->getProducts();
        include_once('view/products.php');
    }
}