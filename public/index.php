<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;


$helloWorld = new Hello();

echo $helloWorld->talk();

$hello = new SayHello();