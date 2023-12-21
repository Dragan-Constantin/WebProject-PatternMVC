<?php

function route_request($address){
    include_once("view/header.php");
    switch ($address) {
        case "/":
            echo '<meta http-equiv="refresh" content="0;url=home">';
            break;
        case "/home":
            break;
        default:
            include_once("view/404.php");
            break;
    }
    
    include_once("view/footer.php");
}