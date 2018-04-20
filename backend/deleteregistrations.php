<?php

include 'config.php';

$query = $pdo->prepare("DELETE FROM user_class");

$query->execute();

