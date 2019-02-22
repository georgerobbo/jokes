<?php
require '../loadTemplate.php';
require '../database.php';
require '../DatabaseTable.php';


$title = 'Internet Joke Database';

$jokesTable = new DatabaseTable($pdo, 'joke', 'id');

$joke = $jokesTable->find('id', 1);

$output = loadTemplate('../templates/home.html.php', ['joke' => $joke[0]]);

require  '../templates/layout.html.php';