<?php

$joke = $jokesTable->find('id', 1);

$jokesTable->delete($_POST['id']);

header('location: jokes.php');
