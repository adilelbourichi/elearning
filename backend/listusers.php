<?php

include 'config.php';

$query = $pdo->prepare("SELECT * FROM user");

$query->execute();

$users = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($users); die();
