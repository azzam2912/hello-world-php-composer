<?php
require __DIR__ ."/vendor/autoload.php";

use Azzam\HelloWorld;

$hello = new HelloWorld();

echo $hello->sayHello() .PHP_EOL;