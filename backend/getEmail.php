<?php

header("Access-Control-Allow-Origin: *");

include 'config.php';

$ID = $_GET['id'];

$query = $pdo->prepare("SELECT email FROM user WHERE ID= :ID");

$query->execute([ ':ID' => $ID ]);

$email = $query->fetchColumn();

echo $email;
