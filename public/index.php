<?php
require '../functions/loadTemplate.php';
require '../database.php';
require '../classes/DatabaseTable.php';

$jokesTable = new DatabaseTable($pdo, 'joke', 'id');

if (isset($_GET['page'])) {
    require '../pages/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.php';
} else {
    require '../pages/home.php';
}

require '../templates/layout.html.php';
