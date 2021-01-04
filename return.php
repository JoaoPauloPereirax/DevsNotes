<?php
//permitindo que outros sites acessem a api
header('Access-Control-Allow-Origin: *');

//permitindo os métodos de requisição
header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS');

//Dizendo que o retorno sempre será um json
header('Content-Type: application/json');

echo json_encode($array);
exit;