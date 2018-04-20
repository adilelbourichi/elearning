<?php

$db_user = 'adasco';
$db_pass = 'adasco';

$pdo = new PDO('mysql:host=localhost;dbname=adasco', $db_user, $db_pass);

$table= "user_contact";

$columns = "ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY, email VARCHAR( 250 ), phone VARCHAR( 250 ), address VARCHAR( 250 )" ;

try{
    $createTable = $pdo->exec("CREATE TABLE IF NOT EXISTS $table ($columns)");
}
catch(\Exception $e)
{
    echo $e->getMessage(); die();
}

$values = [];

$values[]= [ 
                'email'   => 'elbourichi.adil@gmail.com',
                'phone'   => '8083410288',
                'address' => '94 Kuhaulua St, Waipahu, HI 96797'
           ];
		

$values[]= [ 
                'email'   => 'adasco12.international@gmail.com',
                'phone'   => '8086884164',
                'address' => '94-1149 Hoomakoa St, Waipahu, HI 96797'
           ];

$values[]= [ 
                'email'   => 'marcj1.collins@gmail.com',
                'phone'   => '8084692875',
                'address' => '5369 Malu Pl, Honolulu, HI 96816'
           ];


foreach ($values as $key => $value) {
	$email = $value['email'];
	$phone = $value['phone'];
	$address = $value['address'];

	$insert_q = $pdo->prepare("INSERT INTO user_contact(email, phone, address)
                    VALUES(:email, :phone, :address)");
	$insert_q->execute([ ':email' => $email, ':phone' => $phone, ':address' => $address ]);

}

$lastInsertId = $pdo->lastInsertId();

echo $lastInsertId;
