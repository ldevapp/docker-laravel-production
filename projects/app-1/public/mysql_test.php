<?php

try{
    $dbh = new pdo( 'mysql:host=mysql:3306;dbname=test',
                    'test',
                    'test',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
		);
    die(json_encode(
	array(
		'outcome' => true,
		'message'=>'connected with successful')
	)
   );
}
catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => "Unable to connect: {$ex->getMessage()}")));
}
