<?php

include 'config.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = $pdo->prepare("INSERT INTO user(firstName, lastName, email, password) VALUES(:firstName, :lastName, :email, :password)");

$query->execute([ ':firstName' => $firstName, ':lastName' => $lastName, ':email' => $email, ':password' => $password ]);

$userID = $pdo->lastInsertId();

echo $userID;

