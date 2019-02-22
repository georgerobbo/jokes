<?php
$title = 'Internet Joke Database';
$joke = $jokesTable->find('id', 2);
$output = loadTemplate('../templates/home.html.php', ['joke' => $joke[0]]);
