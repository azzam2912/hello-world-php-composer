<?php
require_once __DIR__ ."/vendor/autoload.php";

use Azzam\HelloWorld\HelloWorld;

$hello = new HelloWorld();

echo $hello->sayHello() .PHP_EOL;