<?php

include 'config.php';

$query = $pdo->prepare("SELECT * FROM user_class");

$query->execute();

$users = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($users); die();
