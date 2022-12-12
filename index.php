<?php
/* 
# 1.nci Yöntem.
spl_autoload_register(function ($class) {
    $prefix = 'Kairos\\';
    $base_dir = __DIR__.'/src/libraries/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);

    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';


    if (file_exists($file)) {
        require $file;
    }
}); */

require 'vendor/autoload.php';


$testdb = new Kairos\database\Database();
$testvd = new Kairos\validators\Validators();
$abc = new Kairos\Validators\Test\ABC();

test();



?>