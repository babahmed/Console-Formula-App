<?php

require_once "Methods.php";

class Menu extends Methods{
    public function displayMenu($response){

        echo(@" Welcome to the Console Formular App
        1 - Create a Formular
        2 - List All Formular
        3 - Remove a Formular
        4 - Calculate using Formular
        5 - Quit!");
   
    $response = intval(trim( fgets(STDIN) ));
        switch ($response)
        {
        case 1:
            $this->createFormular();
            break;
        case 2:
            $this->getFormular();
            break;
        case 3:
            $this->removeFormular();
            break;
        case 4:
            $this->calculateFromFormular();
            break;
        case 5:
            $this->quit();
            break;
        default:
            echo ("Input not understood, Please retry again...");
            break;
        }
}  


}