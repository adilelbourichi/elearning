<?php

$db_user = 'adasco';
$db_pass = 'adasco';

$pdo = new PDO('mysql:host=localhost;dbname=adasco', $db_user, $db_pass);

$query = $pdo->prepare("SELECT * from user_contact");
$query->execute();

$info = $query->fetchAll(PDO::FETCH_ASSOC);

$infoJson = json_encode($info);

echo $infoJson;
