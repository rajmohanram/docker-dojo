<?php
header("Content-Type: application/json; charset=UTF-8");

$myObj->NODE_NAME = getenv('MY_NODE_NAME');
$myObj->POD_NAME = getenv('MY_POD_NAME');
$myObj->POD_NAMESPACE = getenv('MY_POD_NAMESPACE');
$myObj->POD_IP = getenv('MY_POD_IP');

$myObj->server_ip = $_SERVER['SERVER_ADDR'];

if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $myObj->client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $myObj->lb_ip  = $_SERVER['REMOTE_ADDR'];
}
else {
        $myObj->client_ip = $_SERVER['REMOTE_ADDR'];
        $myObj->lb_ip = "None";
}

echo json_encode($myObj);

?>
