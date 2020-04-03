<?php
require_once "Menu.php";

$myformula = new Menu;


while(true){

    $myformula->displayMenu($response);

    if($response === 5){
        $this->quit;
    }

}