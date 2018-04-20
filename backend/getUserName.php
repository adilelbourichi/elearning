<?php

header("Access-Control-Allow-Origin: *");

include 'config.php';

$ID = $_GET['id'];

$query = $pdo->prepare("SELECT firstName FROM user WHERE ID= :ID");

$query->execute([ ':ID' => $ID ]);

$firstName = $query->fetchColumn();

echo $firstName;
