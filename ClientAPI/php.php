<?php
// file for testing

require_once __DIR__ . '/vendor/autoload.php';


echo("\n");
print_r('GET ALL');
echo("\n");
$getAll = new ClientAPI\Controllers\Requests\Producers\GetAllProducers();
$getAll->getAllProducers(); // If You are working in TEST ENVIRONMENT( You can change it in class "Creds.php")
//$getAll->getAllProducers('API_LOGIN', 'API_PASSWORD'); //If You are working in PROD ENVIRONMENT, You need to provide active login and password here( For this option please check ENVIRONMENT in Creds.php)
//print_r($getAll);

echo("\n");
print_r('CREATE ONE');
echo("\n");
$createNewProducer = new \ClientAPI\Controllers\Requests\Producers\CreateOneProducer();
$createNewProducer->createOne(); // If You are working on TEST ENVIRONMENT(You can change it in class "Creds.php")
//$createNewProducer->createOne('API_LOGIN', 'API_PASSWORD');//If You are working in PROD ENVIRONMENT, You need to provide active login and password here( For this option please check ENVIRONMENT in Creds.php)
//print_r($createNewProducer);
