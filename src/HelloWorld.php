<?php

namespace Azzam;

class HelloWorld {
    private $name;
    public function __construct($name = "World") {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function sayHello() {
        return "Hello ". $this->name;
    }
}