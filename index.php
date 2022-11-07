<?php

namespace index;

require_once 'vendor/autoload.php';

$tiger = new \My_Package\animals\Tiger(true);
echo $tiger;

echo PHP_EOL;

$cat = new \My_Package\Pets\Cat(true);
echo $cat;

// replace the classmap with this in composer.json, autoload key, if you dont want to use classmaps
// "psr-4": {
//     "My_Package\\": "My_Package"
// },
