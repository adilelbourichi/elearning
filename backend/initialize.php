<?php

$db_user = 'adasco';
$db_pass = 'adasco';

$pdo = new PDO('mysql:host=localhost;dbname=adasco', $db_user, $db_pass);

$table= "user";

$columns = "ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY, firstName VARCHAR( 250 ) NOT NULL, lastName VARCHAR( 250 ) NOT NULL,
email VARCHAR( 250 ) NOT NULL, password VARCHAR( 150 ) NOT NULL" ;

try{
    $createTable = $pdo->exec("CREATE TABLE IF NOT EXISTS $table ($columns)");
}
catch(\Exception $e)
{
    echo $e->getMessage(); die();
}


$table= "user_class";

$columns = "ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY, userId INT( 11 ) NOT NULL, className VARCHAR( 250 ) NOT NULL, sessions VARCHAR( 250 ) NOT NULL" ;

try{
    $createTable = $pdo->exec("CREATE TABLE IF NOT EXISTS $table ($columns)");
}
catch(\Exception $e)
{
    echo $e->getMessage(); die();
}
