<?php

class FormularApp{
    public static $formulars = [];

    public function createFormular() {
        echo "Give Your formula a name: \n";
        $name_of_formular= trim( fgets(STDIN) );
        echo "please enter the formular here: ";
        $operation = trim( fgets(STDIN) );
        FormularApp::$formulars += [$name_of_formular => $operation];
        print_r(FormularApp::$formulars);
    }

    public function getFormular(){
        $formularInstance = new ArrayObject(FormularApp::$formulars);
        $display = $formularInstance->getArrayCopy();
        print_r($display);

    }
   
    public function removeFormular(){

        //$name_of_formular= readline("please enter the formular here: ");
        echo "Please enter a formular to remove: ";
        $name_of_formular = trim( fgets(STDIN) );
        if (array_key_exists($name_of_formular, FormularApp::$formulars))
        {
            FormularApp::$formulars = array_diff_key(FormularApp::$formulars,  array_flip((array) [$name_of_formular]));
            print_r(FormularApp::$formulars); 
        }
        else
        {
            echo "This formular does not exist...\n";
        }

    }
    public function calculateFromFormular(){
        $formularInstance = new ArrayObject(FormularApp::$formulars);
        $display = $formularInstance->getArrayCopy();
        print_r($display);
        echo "please enter the formular you desire to work with, here: \n";
        $name_of_formular = trim( fgets(STDIN) );
        if (array_key_exists($name_of_formular, FormularApp::$formulars))
        {
            $output = array_flip(FormularApp::$formulars);
            $values = array_search($name_of_formular, $output,true); 
            print_r($value."\n");
             $a = intval(trim( fgets(STDIN) ));
             $b = intval(trim( fgets(STDIN) ));
             $value = eval('return '.$value.';');
            echo $value;
        }
        else
        {
            echo "This formular does not exist...\n";
        }

    }
    public function quit(){
        exit();
    }

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

$myformula = new FormularApp;


while(true){
    
    $myformula->displayMenu($response);

    if($response === 5){
        $this->quit;
    }

}