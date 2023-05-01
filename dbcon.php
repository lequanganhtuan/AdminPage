<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('movie-b06ca-firebase-adminsdk-uu31x-62df891e15.json')
    ->withDatabaseUri('https://movie-b06ca-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();

?>
