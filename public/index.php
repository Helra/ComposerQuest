<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;

$helloWorld = new Hello();

echo $helloWorld->world();

