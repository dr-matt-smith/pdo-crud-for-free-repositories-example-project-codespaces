<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Movie;
use Tudublin\MovieRepository;

$movieRepository = new MovieRepository();

// (1) drop then create table
$movieRepository->dropTable();
$movieRepository->createTable();

// (2) delete any existing objects
$movieRepository->deleteAll();

// (3) create objects
$m1 = new Movie();
$m1->setTitle('Jaws');
$m1->setPrice(9.99);
$m1->setCategory('horror');

$m2 = new Movie();
$m2->setTitle('Jumanji');
$m2->setPrice(9.99);
$m2->setCategory('entertainment');

// (3) insert objects into DB
$movieRepository->insert($m1);
$movieRepository->insert($m2);

// (4) test objects are there
$movies = $movieRepository->findAll();
print '<pre>';
var_dump($movies);
