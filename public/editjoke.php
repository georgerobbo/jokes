<?php

require '../loadTemplate.php';

require '../database.php';

require '../functions.php';

if (isset($_GET['id'])) {
    $joke = find($pdo, 'joke', $_GET['id'], 'id'[0]);
} else {
    $joke = false;
}

if (isset($_POST['submit'])) {
    save($pdo, 'joke', $_POST['joke'], 'id'[0]);
    header('location: jokes.php');
} else {
    $output = loadTemplate('../templates/addjoke.html.php', ['joke' => $joke]);
    $title = 'Add a new joke';
}
require  '../templates/layout.html.php';