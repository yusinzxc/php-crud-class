<?php
    class Person{
        public $name;
        
        function __construct($name)
        {
            $this->name = $name; 
        }
        public function introuduce(){
            echo $this->name;
        }
    }
?>