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
    

    // ! Footer keeps sticking at the bottom of screen instead of bottom of page.
    // ! It blocks access to some buttons and iframes.
    // TODO : Fix footer at the bottom of each page instead of bottom of screen
    $year = date("Y");
    $name = "Smartbike";
    include_once("view/footer.php");
}