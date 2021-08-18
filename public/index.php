<?php

use App\Router;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require '../vendor/autoload.php';

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader, [
    //'cache' => '/path/to/compilation_cache',
    'debug' => true,
]);

echo (new Router($twig))->process();