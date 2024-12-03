<?php

// class Human {
//     public $gender;
//     public $name;
//     public $age;
//     public $height;

//     function __construct() {
//     }

//     function display_details() {
//         echo "Gender: " . $this->gender . "<br/> Name: " . $this->name . "<br/> Age: " . $this->age . "<br/> Height: " . $this->height . "<br/>";
//     }
// }

// class Male extends Human {
//     public $jd;

//     public function __construct($jd, $gender, $name, $age, $height) {
//         $this->gender = $gender;
//         $this->name = $name;
//         $this->age = $age;
//         $this->height = $height;
//         $this->jd = $jd;  
//     }

//     public function jd_display() {
//         echo "Gender: " . $this->gender . "<br/> Name: " . $this->name . "<br/> Age: " . $this->age . "<br/> Height: " . $this->height . "<br/> JD: " . $this->jd . "<br/>";
//     }
// }

// $obj = new Male("Associate Software Engineer", "Male", "Abdullah Baig", 22, 6.4);

// $obj->jd_display();

interface Animals {
    public function Animal_Name();
    public function Animalsound();
}

class Dog implements Animals {
    public function Animal_Name() {
        echo "This is the dog class<br>";
    }

    public function Animalsound() {
        echo "Dog says bark bark<br>";
    }
}

$dog = new Dog();
$dog->Animal_Name();  
$dog->Animalsound();  

?>


