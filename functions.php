<?php
function find($pdo, $table, $field, $value) {
	$stmt = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . ' = :value');

	$criteria = [
		'value' => $value
	];
	$stmt->execute($criteria);

	return $stmt->fetchAll();
}


function findAll($pdo, $table) {
	$stmt = $pdo->prepare('SELECT * FROM ' . $table);

	$stmt->execute();

	return $stmt->fetchAll();
}

function insert($pdo, $table, $record) {
        $keys = array_keys($record);

        $values = implode(', ', $keys);
        $valuesWithColon = implode(', :', $keys);

        $query = 'INSERT INTO ' . $table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';

        $stmt = $pdo->prepare($query);

        $stmt->execute($record);
}

function deleteJoke($pdo, $id) {
	$stmt = $pdo->prepare('DELETE FROM joke WHERE id = :id');
	$criteria = [
		'id' => $id
	];
	$stmt->execute($criteria);
}