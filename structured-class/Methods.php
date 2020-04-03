<?php

class Methods{
    public static $formulars = [];

    public function createFormular() {
        echo "Give Your formula a name: \n";
        $name_of_formular= trim( fgets(STDIN) );
        echo "please enter the formular here: ";
        $operation = trim( fgets(STDIN) );
        Methods::$formulars += [$name_of_formular => $operation];
        print_r(Methods::$formulars);
    }

    public function getFormular(){
        $formularInstance = new ArrayObject(Methods::$formulars);
        $display = $formularInstance->getArrayCopy();
        print_r($display);

    }
   
    public function removeFormular(){
        echo "Please enter a formular to remove: ";
        $name_of_formular = trim( fgets(STDIN) );
        if (array_key_exists($name_of_formular, Methods::$formulars))
        {
            Methods::$formulars = array_diff_key(Methods::$formulars,  array_flip((array) [$name_of_formular]));
            print_r(Methods::$formulars); 
        }
        else
        {
            echo "This formular does not exist...\n";
        }

    }
    public function calculateFromFormular(){
        $formularInstance = new ArrayObject(Methods::$formulars);
        $display = $formularInstance->getArrayCopy();
        print_r($display);
        echo "please enter the formular here: \n";
        $name_of_formular = trim( fgets(STDIN) );
        if (array_key_exists($name_of_formular, Methods::$formulars))
        {
            $output = array_flip(Methods::$formulars);
            $values = array_search($name_of_formular, $output, true); 
            print_r($values."\n");
             foreach($values as $name_of_formular => $values){
                 $value = eval(intval(trim( fgets(STDIN) )));
             }
             echo $name_of_formular = $value;
        }
        else
        {
            echo "This formular does not exist...\n";
        }

    }
    public function quit(){
        exit();
    }
}