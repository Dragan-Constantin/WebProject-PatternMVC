<?php

// require("model/contactModel.php");

class contactController {
    private $model;
    
    public function __construct() {
        // $this->model = new ContactModel;
    }

    public function getContactPage() {
        include_once('view/contact.php');
    }
}