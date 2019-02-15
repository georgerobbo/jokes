<?php

require '../loadTemplate.php';

require '../database.php';

require '../functions.php';

if (isset($_POST['joketext'])) {
	$stmt = $pdo->prepare('UPDATE joke SET joketext = :joketext WHERE id = :id');
	$stmt->execute(['joketext' => $_POST['joketext'], 'id' => $_POST['id']]);

	header('location: jokes.php');
}
else {
	$joke = find($pdo, 'joke', 'id', $_GET['id']);

	$output = loadTemplate('../templates/editjoke.html.php', ['joke' => $joke[0]]);
	$title = 'Edit joke';
}

require  '../templates/layout.html.php';