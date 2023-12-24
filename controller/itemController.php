<?php

require("model/productsModel.php");

class ItemController {
    private $model;

    public function __construct() {
        $this->model = new ProductsModel;
    }

    public function getItemPage($productID) {
        $product = $this->model->getItem($productID);
        include_once('view/item.php');
    }
}