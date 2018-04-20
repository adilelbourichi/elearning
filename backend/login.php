<?php

header("Access-Control-Allow-Origin: *");

include 'config.php';

$password = $_POST['password'];
$email = $_POST['email'];

$query = $pdo->prepare("SELECT ID FROM user WHERE email= :email AND password = :password");

$query->execute([':email' => $email, ':password' => $password ]);

$userID = $query->fetchColumn();

if(!empty($userID)) echo $userID;
else echo 0;
