<?php

include 'config.php';

$query = $pdo->prepare("DELETE FROM user");

$query->execute();

