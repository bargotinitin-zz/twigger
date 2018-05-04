<?php

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));

print "<pre>";
print_r($loader);

$twig = new Twig_Environment($loader);
print_r($twig);

echo $twig->render('index', array('name' => 'Fabien'));
