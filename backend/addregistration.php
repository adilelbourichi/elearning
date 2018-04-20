<?php

include 'config.php';

$userId = $_POST['userId'];
$session = $_POST['session'];
$className = $_POST['className'];
$options = $_POST['options'];

if(strpos($session, "Register for all") === 0)
{
    foreach($options as $key => $value)
    {
        if( $key > 0 )
        {
            $pos = strpos($value, '($');
            $string = substr($value, 0, $pos);
            $date = new DateTime($string);
            $newDate = $date->format('Y-m-d');
            $insert_q = $pdo->prepare("INSERT INTO user_class(userId, className, sessions) VALUES(:userId, :className, :sessions)");
            $insert_q->execute([ ':userId' => $userId, ':className' => $className, ':sessions' => $newDate ]);
        }
    }
    
}
else
{
    $pos = strpos($session, '($');
    $string = substr($session, 0, $pos);
    $date = new DateTime($string);
    $newDate = $date->format('Y-m-d');
    $insert_q = $pdo->prepare("INSERT INTO user_class(userId, className, sessions) VALUES(:userId, :className, :sessions)");
    $insert_q->execute([ ':userId' => $userId, ':className' => $className, ':sessions' => $newDate ]);
}
