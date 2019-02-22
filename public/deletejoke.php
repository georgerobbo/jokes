<?php

require '../database.php';
require '../DatabaseTable.php';

$jokesTable = new DatabaseTable($pdo, 'joke', 'id');

$joke = $jokesTable->find('id', 1);

$jokesTable->delete($_POST['id']);

header('location: jokes.php');