<?php

include 'config.php';

$userId = $_GET['id'];

$query = $pdo->prepare("SELECT * FROM user_class WHERE userId = :userId ORDER BY sessions ASC");

$query->execute([ ':userId' => $userId ]);

$users = $query->fetchAll(PDO::FETCH_ASSOC);

$output = json_encode($users);

echo $output;
