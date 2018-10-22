<?php

// Some sample keys to test with. Never use these keys in production!
define('API_KEYS', array(
    'kNLbNKNSJyhAFDXEcjw2Aj9Q98D7s2td',
    'sPLvQQWtYbCArE8DaGReagrEvavYXRnc',
    '7DQwkCUcJwp7D5F5xb4aAPwpqD44hPdS'
));

function returnUnauthorized($message) {
    header("HTTP/1.1 401 Unauthorized");
    print('{"exception":"' . $message . '"}');
    exit();
}

$headers = apache_request_headers();
if(isset($headers['Authorization'])) {
    $authorizationHeader = explode(" ", $headers['Authorization']);
    if(isset($authorizationHeader[0]) &&  $authorizationHeader[0] === 'Apikey') {
        if(isset($authorizationHeader[1]) &&  in_array($authorizationHeader[1], API_KEYS)) {
            // Place any post authorization code here
        }
        else {
            returnUnauthorized('Apikey supplied does not match any authorized keys.');
        }
    }
    else {
        returnUnauthorized('Unsupported Authorization type.');
    }
}
else {
    returnUnauthorized('Missing Authorization header.');
}
