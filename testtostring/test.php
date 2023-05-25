<?php

class User {

    private $name;
    private $age;

    public function  __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function __tostring(){
        return "Nom: " . $this->name ."<br> age: " . $this->age;
    }
    //setter
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    //getter 


}


?>