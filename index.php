<?php

include 'vendor/autoload.php';
use Bobylove\App\Foo\Client;	
$foo = new Client();
$foo->render();


use Bobylove\App\Bar\Client as BarClient ;

$bar = new BarClient();
$bar->render();



?>