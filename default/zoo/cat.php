<?php
namespace zoo;
include "animal.php";

class Cat extends Animal {
    
        private $color;
        private $race;
        private $domesticated;
        private $name;
        
    
        public function __construct(string $name, string $race, array $color=[], bool $domesticated=true) {
            parent::__construct();
            $this->name = $name;
            $this->race = $race; 
            $this->color = $color;
            $this->domesticated = $domesticated;
            
        }
    
        public function get_name():string {
            return $this->name;
        }
    
        public function get_race():string {
            return $this->race;
        }
    
        public function get_color():array {
            return $this->color;
        }
    
        public function get_domesticated():bool {
            return $this->domesticated;
        }
    
        public function domesticated() {
            $this->domesticated = !$this->domesticated;
        }
        public function meaw():string {
            return "Miawww";
        }
    
        public function scratch():string {
            return "greif";
        }
    
        public function hunt():string {
            return "I am runing on mouse";
        }
    
    }