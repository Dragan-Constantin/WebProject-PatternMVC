<?php

function route_request($address){
    include_once("view/header.php");
    global $productID;
    
    if ($address === "/") {
        echo '<meta http-equiv="refresh" content="0;url=home">';
    } elseif ($address === "/home") {
        require_once("controller/homeController.php");
        $page = new HomeController;
        $page->getHomePage();
        if (isset($_GET['id'])) {
            $productID = $_GET['id'];
        }
    } elseif ($address === "/products") {
        include_once("controller/productsController.php");
        $page = new ProductsController;
        $page->getProductsPage();
    } elseif ($address === "/order") {
        include_once("controller/orderController.php");
        $page = new OrderController;
        $page->getOrderPage();
    } elseif ($address === "/contact") {
        include_once("controller/contactController.php");
        $page = new ContactController;
        $page->getContactPage();
    } elseif (strpos($address, "/products") === 0) {
        $params = explode('?', $address);
        if (isset($params[1]) && strpos($params[1], 'id=') === 0) {
            $productID = substr($params[1], strpos($params[1], '=') + 1);
            include_once("controller/itemController.php");
            $page = new ItemController;
            $page->getItemPage($productID);
            // echo "<h1>This is the detail page of $productID</h1>";
        }
    } else {
        include_once("view/404.php");
    }
    
    // var_dump($productID);
    
    $year = date("Y");
    $name = "Smartbike";
    include_once("view/footer.php");
}