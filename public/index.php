<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\MovieRepository;
use Tudublin\Movie;

// for Car DB actions
$movieRepository = new MovieRepository();

$m = new Movie();
$m->setTitle('pop');
$m->setPrice(8.01);
$m->setCategory('(unknown)');
$movieRepository->insert($m);

$movies = $movieRepository->findAll();

print '<pre>';
var_dump($movies);

