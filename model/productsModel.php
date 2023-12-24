<?php
include_once("libraries/Database.php");

class ProductsModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getProducts() {
        // $this->db->prepareQuery("SELECT `title`, `link` FROM musics");
        $this->db->prepareQuery("SELECT `id`, `name`, `price`, `description`, `image_path` FROM `products` ORDER BY `price` ASC");
        $data = $this->db->resultSet();
        return $data;
    }

    public function getItem($id) {
        $this->db->prepareQuery("SELECT `id`, `name`, `price`, `description`, `image_path` FROM `products` WHERE `id`=$id");
        $data = $this->db->resultSingle();
        return $data;
    }

    public function getLatestItem() {
        $this->db->prepareQuery("SELECT `id`, `name`, `image_path` FROM `products` WHERE `id`=(SELECT MAX(`id`) FROM `products`);");
        $data = $this->db->resultSingle();
        return $data;
    }
}