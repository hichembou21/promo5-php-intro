<?php

class Human {
    private $name;    
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function get_age() {
        return $this->age;
    }
    public function get_name() {
        return $this->name;
    }
    public function birthday() {
        $this->age++;
    }
}

class Toto extends Human {

    public function __construct($age) {
        parent::__construct("toto", $age);
    }

    public function finger() {
        echo "disgusting !!";
    }
    public function get_age() {
        return "toto à ".parent::get_age()." ans";
    }
}

// $toto = new Human("toto", 18);
// var_dump($toto);
// echo "<br>";
// echo $toto->get_age();
// echo "<br>";
// echo $toto->get_name();
// $toto->birthday();
// var_dump($toto);

$toto = new Toto(20);
var_dump($toto);
echo "<br>";
$toto->finger();
echo $toto->get_age();
